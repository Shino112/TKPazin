<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sezona;

class SezoneController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sezone = Sezona::latest()->paginate(10);
        $sezoneCount = Sezona::count();

        return view("backend.sezone.index", compact('sezone', 'sezoneCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sezona = new Sezona ();

        return view("backend.sezone.create", compact('sezona'));
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
            'godina' => 'required|unique:sezonas',
        ]);

        Sezona::create($request->all());

        return redirect(route('sezone.index'))->with('message', 'Sezona je uspješno izrađena!');
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
        $sezona = Sezona::findOrFail($id);
        
        return view("backend.sezone.edit", compact('sezona'));
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
            'godina' => 'required|unique:sezonas,godina,' . $id,
        ]);

        Sezona::findOrFail($id)->update($request->all());

        return redirect(route("sezone.index"))->with("message", "Sezona je uspješno izmjenjena!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sezona = Sezona::findOrFail($id);
        $sezona->delete();

        return redirect(route("sezone.index"))->with("message", "Sezona je uspješno izbrisana!");
    }
}
