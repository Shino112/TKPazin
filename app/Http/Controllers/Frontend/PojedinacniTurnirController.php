<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sezona;
use App\TurnirPojedinacni;
use Illuminate\Support\Facades\Session;

class PojedinacniTurnirController extends Controller
{
    public function show($id_sezona, $id_kola)
    {
        
        $sesija = Session::flash('odabrana_godina', $id_sezona);
        
        $sezone = Sezona::orderBy('godina', 'desc')->get();

        $sezona = Sezona::findOrFail($id_sezona);
        
        $kola = TurnirPojedinacni::where('sezona_id', $id_sezona)->orderBy('id', 'desc')->get(); 
        
        $kolo_prvo = TurnirPojedinacni::where('sezona_id', $id_sezona)->first();

        $kolo_aktivno = TurnirPojedinacni::where('id', $id_kola)->first();


        //dd($kola);

        return view('frontend.pojedinacni_turnir', compact('sezone', 'sezona', 'kola', 'sesija', 'kolo_prvo', 'kolo_aktivno'))->render();
    }
}
