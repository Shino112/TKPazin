<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class NovostiController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('img/novosti');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novosti = Post::latest()->paginate(10);
        $novostiCount = Post::count();

        return view("backend.novosti.index", compact('novosti', 'novostiCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $novost = new Post ();

        return view("backend.novosti.create", compact('novost'));
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
            'tekst' => 'required',
            'slika' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if($request->hasFile('slika'))
        {
            $image = $request->file('slika');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);

            Post::create([
                'naslov' => $request->naslov,
                'tekst' => $request->tekst,
                'slika' => '/img/novosti/' . $fileName
            ]);

        }
        else
        {
            Post::create([
                'naslov' => $request->naslov,
                'tekst' => $request->tekst,
            ]);
        }

        return redirect(route('novosti.index'))->with('message', 'Novost je uspješno izrađena!');
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
        $novost = Post::findOrFail($id);
        
        return view("backend.novosti.edit", compact('novost'));
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
            'tekst' => 'required',
            'slika' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        $novost = Post::findOrFail($id);

        $oldImage = $novost->slika;
        
        if($request->hasFile('slika'))
        {
            $image = $request->file('slika');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);

            $novost->update([
                'naslov' => $request->naslov,
                'tekst' => $request->tekst,
                'slika' => '/img/novosti/' . $fileName
            ]);

            

        }
        else
        {
            $novost->update([
                'naslov' => $request->naslov,
                'tekst' => $request->tekst,
            ]);
        }
        

        return redirect(route('novosti.index'))->with('message', 'Novost je uspješno izmjenjena!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $novost = Post::findOrFail($id);
        $novost->delete();

        return redirect(route("novosti.index"))->with("message", "Novost je uspješno izbrisana!");
    }
}
