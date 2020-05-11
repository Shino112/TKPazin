<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Album;

class AlbumiController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('img/slike_albuma');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albumi = Album::latest()->paginate(10);
        $albumiCount = Album::count();

        return view("backend.albumi.index", compact('albumi', 'albumiCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $album = new Album ();

        return view("backend.albumi.create", compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'naslov' => 'required',
            'slika_albuma' => 'required|mimes:jpg,jpeg,bmp,png',
        ]);

        if($request->hasFile('slika_albuma'))
        {
            $image = $request->file('slika_albuma');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);

            Album::create([
                'naslov' => $request->naslov,
                'slika_albuma' => '/img/slike_albuma/' . $fileName
            ]);

        }
        else
        {
            Album::create([
                'naslov' => $request->naslov,
            ]);
        }

        return redirect(route('albumi.index'))->with('message', 'Album je uspješno izrađen!');
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
        $album = Album::findOrFail($id);
        
        return view("backend.albumi.edit", compact('album'));
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
        $this->validate($request, [
            'naslov' => 'required',
            'slika_albuma' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        $album = Album::findOrFail($id);

        $oldImage = $album->slika_albuma;
        
        if($request->hasFile('slika_albuma'))
        {
            $image = $request->file('slika_albuma');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);

            $album->update([
                'naslov' => $request->naslov,
                'slika_albuma' => '/img/slike_albuma/' . $fileName
            ]);

            if($oldImage !== $album->slika_albuma) {
                $this->removeImage($oldImage);
            }

        }
        else
        {
            $album->update([
                'naslov' => $request->naslov,
            ]);
        }
        
        //dd($album->slika_albuma);
        return redirect(route('albumi.index'))->with('message', 'Album je uspješno izmjenjen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        return redirect(route("albumi.index"))->with("message", "Album je uspješno izbrisan!");
    }

    private function removeImage($image)
    {
        if(!empty($image))
        {
            $imagePath = $image;

            if(file_exists($imagePath)) unlink($imagePath);
        }
    }
}
