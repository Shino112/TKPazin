<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sezona;
use App\TurnirPojedinacni;
use Illuminate\Support\Facades\Session;

class PojedinacniTurnirController extends Controller
{
    public function show($id_sezona)
    {
        $sesija = Session::flash('odabrana_godina', $id_sezona);
        
        $sezone = Sezona::orderBy('godina', 'desc')->get();

        $sezona = Sezona::findOrFail($id_sezona);
        
        $kola = TurnirPojedinacni::where('sezona_id', $id_sezona)->orderBy('id', 'asc')->get();      

        //dd($kola);

        return view('frontend.pojedinacni_turnir', compact('sezone', 'sezona', 'kola', 'sesija'))->render();
    }
}
