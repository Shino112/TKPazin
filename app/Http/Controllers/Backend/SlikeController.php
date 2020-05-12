<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slika;
use App\Album;

class SlikeController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $slika = new Slika ();

        $album = Album::where('id', $id)->first();
        //dd($album);
        return view("backend.slike.create", compact('slika', 'album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $album = Album::where('id', $id)->first();
        
        $this->validate($request, [
            'putanja' => 'required',
            'naslov' => 'required',
            'putanja.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);
        
        if($request->hasfile('putanja'))
        {
            foreach($request->file('putanja') as $image)
            {
                $fileName=$image->getClientOriginalName();
                $destination = public_path('img/slike_u_albumima');
                $image->move($destination, $fileName);  // your folder path
                $data[] = "/img/slike_u_albumima/" . $fileName;  
            }
        }
        if($request->has('naslov'))
        {
            foreach($request->naslov as $tekst)
            {
                $data1[] = $tekst;
            }
        }
        for($i=0; $i < sizeof($data); $i++)
        {
            $Upload_model = new Slika;
            $Upload_model->putanja = $data[$i];
            $Upload_model->naslov = $data1[$i];
            $Upload_model->album_id = $album->id;
            $Upload_model->save();
            //dd($Upload_model);
        }
        
        //dd($data[0]);
        return back()->with('success', 'Tvoje slike su uspješno uploadane!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slika = Slika::findOrFail($id);
        
        unlink(public_path($slika->putanja));

        $slika->delete();

        return back()->with("message", "Slika je uspješno izbrisana!");
    }
}
