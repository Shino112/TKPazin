<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Igrac;
use Illuminate\Support\Facades\DB;

class IgraciController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('img/igraci');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $igraci = Igrac::latest()->paginate(10);
        $igraciCount = Igrac::count();

        return view("backend.igraci.index", compact('igraci', 'igraciCount'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $igraci = Igrac::where('prezime', 'like', '%'.$search.'%')->orwhere('ime', 'like', '%'.$search.'%')->paginate(10);
        $igraciCount = Igrac::count();
        return view("backend.igraci.index", compact('igraci', 'igraciCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $igrac = new Igrac ();

        return view("backend.igraci.create", compact('igrac'));
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
            'ime' => 'required',
            'prezime' => 'required',
            'prebivaliste' => 'required',
            'igra' => 'required',
            'clanstvo' => 'required',
            'slika' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if($request->hasFile('slika'))
        {
            $image = $request->file('slika');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);

            Igrac::create([
                'ime' => $request->ime,
                'prezime' => $request->prezime,
                'prebivaliste' => $request->prebivaliste,
                'igra' => $request->igra,
                'clanstvo' => $request->clanstvo,
                'slika' => '/img/igraci/' . $fileName
            ]);

        }
        else
        {
            Igrac::create([
                'ime' => $request->ime,
                'prezime' => $request->prezime,
                'prebivaliste' => $request->prebivaliste,
                'igra' => $request->igra,
                'clanstvo' => $request->clanstvo,
            ]);
        }

        return redirect(route('igraci.index'))->with('message', 'Igrač je uspješno izrađen!');
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
        $igrac = Igrac::findOrFail($id);
        
        return view("backend.igraci.edit", compact('igrac'));
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
            'ime' => 'required',
            'prezime' => 'required',
            'prebivaliste' => 'required',
            'igra' => 'required',
            'clanstvo' => 'required',
            'slika' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        $igrac = Igrac::findOrFail($id);

        $oldImage = $igrac->slika;
        
        if($request->hasFile('slika'))
        {
            $image = $request->file('slika');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);

            $igrac->update([
                'ime' => $request->ime,
                'prezime' => $request->prezime,
                'prebivaliste' => $request->prebivaliste,
                'igra' => $request->igra,
                'clanstvo' => $request->clanstvo,
                'slika' => '/img/igraci/' . $fileName
            ]);
            

        }
        else
        {
            $igrac->update([
                'ime' => $request->ime,
                'prezime' => $request->prezime,
                'prebivaliste' => $request->prebivaliste,
                'igra' => $request->igra,
                'clanstvo' => $request->clanstvo,
            ]);
        }

        return redirect(route('igraci.index'))->with('message', 'Igrač je uspješno izmjenjen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $igrac = Igrac::findOrFail($id);
        $igrac->delete();

        return redirect(route("igraci.index"))->with("message", "Igrač je uspješno izbrisan!");
    }
}
