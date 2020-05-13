<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TurnirPiramida;

class PiramidaController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piramide = TurnirPiramida::latest()->paginate(10);
        $piramideCount = TurnirPiramida::count();

        return view("backend.piramida.index", compact('piramide', 'piramideCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piramida = new TurnirPiramida ();

        return view("backend.piramida.create", compact('piramida'));
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
            'naziv' => 'required',
            'sezona_id' => 'required',
        ]);

        TurnirPiramida::create($request->all());

        return redirect(route('piramida.index'))->with('message', 'Piramida uspješno izrađena!');
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
        $piramida = TurnirPiramida::findOrFail($id);
        
        return view("backend.piramida.edit", compact('piramida'));
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
            'naziv' => 'required',
            'sezona_id' => 'required',
        ]);

        $piramida = TurnirPiramida::findOrFail($id);
        
        $piramida->update($request->all());

        return redirect(route('piramida.index'))->with('message', 'Piramida uspješno izmjenjena!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $piramida = TurnirPiramida::findOrFail($id);
        $piramida->delete();

        return redirect(route("piramida.index"))->with("message", "Piramida je uspješno izbrisana!");
    }
}
