<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TurnirPiramida;
use App\NastupPiramida;
use App\Igrac;
use App\Sezona;
use Illuminate\Support\Facades\DB;

class PiramidaController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piramide = TurnirPiramida::orderBy('sezona_id', 'desc')->orderBy('id', 'desc')->paginate(10);
        $piramideCount = TurnirPiramida::count();

        return view("backend.piramida.index", compact('piramide', 'piramideCount'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $sezona = Sezona::where('godina', $search)->pluck('id')->first();
        $piramide = TurnirPiramida::where('sezona_id', $sezona)->paginate(10);
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
        $piramida = TurnirPiramida::findOrFail($id);

        $igraci_u_piramidi = NastupPiramida::where('turnir_piramida_id', $id)->orderBy('bodovi', 'desc')->get();

        $igraci_u_piramidiCount = NastupPiramida::where('turnir_piramida_id', $id)->where('bodovi', '<>', 0)->count();

        $id_turnira = $id;
        
        //dd($igraci_u_turniru);
        
        return view("backend.bodovi_piramida.index", compact('piramida', 'igraci_u_piramidi', 'igraci_u_piramidiCount', 'id_turnira'));

    }

    public function bodovi($id)
    {
        $piramida = TurnirPiramida::findOrFail($id);
        
        $bodovi = new NastupPiramida ();
        
        $igraci = Igrac::orderBy('prezime', 'asc')->get();

        $bodovi_na_piramidi = NastupPiramida::where('turnir_piramida_id', $id)->get();

        $id_turnira = $id;

        //dd($id_turnira);

        return view("backend.bodovi_piramida.create", compact('igraci', 'bodovi_na_piramidi', 'bodovi', 'id_turnira', 'piramida'));
    }

    public function bodovi_store(Request $request, $id)
    {
        $piramida_bodovi = NastupPiramida::where('turnir_piramida_id', $id)->delete();
        
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
            $bodovi_na_piramidi = new NastupPiramida ();
            $bodovi_na_piramidi->igrac_id = $data_igrac[$i];
            $bodovi_na_piramidi->turnir_piramida_id = $id;
            $bodovi_na_piramidi->bodovi = $data_bodovi[$i];
            $bodovi_na_piramidi->save();
        }
        return redirect(route('piramida.show', $id))->with("message", "Bodovi su uspješno dodani!");
    }

    public function bodovi_edit($id_piramida, $id_igraca)
    {
        $nastup_piramida = NastupPiramida::where('turnir_piramida_id', $id_piramida)->where('igrac_id', $id_igraca)->first();
        
        $id_turnira = $id_piramida;
        $piramida = TurnirPiramida::findOrFail($id_piramida);

        return view("backend.bodovi_piramida.edit", compact('nastup_piramida', 'id_turnira', 'piramida'));
    }

    public function bodovi_update(Request $request, $id_piramida, $id_igraca)
    {
        $this->validate($request, [
            'bodovi' => 'required',
        ]);

        $nastup_piramida = NastupPiramida::where('turnir_piramida_id', $id_piramida)->where('igrac_id', $id_igraca)->first();

        //dd($request->bodovi);
        //dd($nastup_turnir);
        DB::table('nastup_piramidas')->where('turnir_piramida_id', $nastup_piramida->turnir_piramida_id)->where('igrac_id', $nastup_piramida->igrac_id)->update(['bodovi' => $request->bodovi]);

        return redirect(route('piramida.show', $id_piramida))->with("message", "Bodovi igrača na piramidi su uspješno izmjenjeni!");
    }

    public function bodovi_delete($id_piramida, $id_igraca)
    {
        DB::table('nastup_piramidas')->where('turnir_piramida_id', $id_piramida)->where('igrac_id', $id_igraca)->delete();
        
        return redirect(route('piramida.show', $id_piramida))->with("message", "Bodovi igrača na piramidi su uspješno izbrisani!");
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
