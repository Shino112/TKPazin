<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TurnirPojedinacni;
use App\NastupTurnir;
use App\Igrac;

class TurniriController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turniri = TurnirPojedinacni::orderBy('sezona_id', 'desc')->paginate(10);
        $turniriCount = TurnirPojedinacni::count();

        return view("backend.turniri.index", compact('turniri', 'turniriCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turnir = new TurnirPojedinacni ();

        return view("backend.turniri.create", compact('turnir'));
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

        TurnirPojedinacni::create($request->all());

        return redirect(route('turniri.index'))->with('message', 'Pojedinačni turnir uspješno izrađen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turnir = TurnirPojedinacni::findOrFail($id);

        $igraci_u_turniru = NastupTurnir::where('turnir_pojedinacni_id', $id)->get();

        $igraci_u_turniruCount = NastupTurnir::where('turnir_pojedinacni_id', $id)->count();

        $id_turnira = $id;
        
        //dd($igraci_u_turniru);
        
        return view("backend.bodovi_turnir.index", compact('turnir', 'igraci_u_turniru', 'igraci_u_turniruCount', 'id_turnira'));

    }

    public function bodovi($id)
    {
        $turnir = TurnirPojedinacni::findOrFail($id);
        
        $bodovi = new NastupTurnir ();
        
        $igraci = Igrac::orderBy('prezime', 'asc')->get();

        $bodovi_na_turniru = NastupTurnir::where('turnir_pojedinacni_id', $id)->get();

        $id_turnira = $id;

        //dd($id_turnira);

        return view("backend.bodovi_turnir.create", compact('igraci', 'bodovi_na_turniru', 'bodovi', 'id_turnira', 'turnir'));
    }

    public function bodovi_store(Request $request, $id)
    {
        $turnir_bodovi = NastupTurnir::where('turnir_pojedinacni_id', $id)->delete();
        
        foreach($request->igrac_id as $igrac)
        {
            $data_igrac[] = $igrac;
        }
        foreach($request->bodovi as $bodovi)
        {
            $data_bodovi[] = $bodovi;
        }

        for($i=0; $i < sizeof($data_igrac); $i++)
        {
            //dd($data_igrac);
            //dd($data_bodovi);
            $bodovi_na_turniru = new NastupTurnir ();
            $bodovi_na_turniru->igrac_id = $data_igrac[$i];
            $bodovi_na_turniru->turnir_pojedinacni_id = $id;
            $bodovi_na_turniru->bodovi = $data_bodovi[$i];
            $bodovi_na_turniru->save();
        }
        return redirect(route('turniri.show', $id))->with("message", "Bodovi su uspješno dodani!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turnir = TurnirPojedinacni::findOrFail($id);
        
        return view("backend.turniri.edit", compact('turnir'));
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

        $turnir = TurnirPojedinacni::findOrFail($id);
        
        $turnir->update($request->all());

        return redirect(route('turniri.index'))->with('message', 'Pojedinačni turnir uspješno je izmjenjen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turnir = TurnirPojedinacni::findOrFail($id);
        $turnir->delete();

        return redirect(route("turniri.index"))->with("message", "Pojedinačni turnir je uspješno izbrisan!");
    }
}
