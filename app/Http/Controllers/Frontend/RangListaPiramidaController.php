<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sezona;
use App\Igrac;
use App\TurnirPiramida;
use DB;
use App\NastupPiramida;

class RangListaPiramidaController extends Controller
{
    public function show($id)
    {
        $sesija = Session::flash('odabrana_godina', $id);
        
        $sezone = Sezona::orderBy('godina', 'desc')->get();
        
        $sezona = Sezona::findOrFail($id);

        //Sva kola koja su u toj sezoni, u array spremi id od tih kola
        $kola_id = TurnirPiramida::where('sezona_id', $id)->pluck('id');

        //provjera pomocu koje vidimo da li ima turnira za tu sezonu inace ispisuje poruku da ne dobivamo sql gresku
        if (isset($kola_id) && count($kola_id) > 0) {
            //Svi id-evi igraca koji su u tom kolu spremi u array
            $odabrani = NastupPiramida::where('turnir_piramida_id', $kola_id)->pluck('igrac_id');

            $igraci = Igrac::whereIn('id', $odabrani)
                ->leftjoin('nastup_piramidas', 'igracs.id','=','nastup_piramidas.igrac_id')
                ->whereIn('nastup_piramidas.turnir_piramida_id', $kola_id)
                ->selectRaw('igracs.*, SUM(nastup_piramidas.bodovi) AS ukupno')
                ->groupBy('igracs.id')
                ->orderBy('ukupno', 'desc')
                ->get();
            
            $kola = TurnirPiramida::where('sezona_id', $id)->get();

            //dd($kola_id);

            return view("frontend.ranglista_piramida_kola", compact('sezone', 'sezona', 'igraci', 'kola', 'kola_id', 'sesija'))->render();
        } 
        
        else {
            //dd($kola_id);
            return view("frontend.ranglista_piramida_kola_empty", compact('sezone', 'sezona', 'kola_id', 'sesija'))->render();
        }

        
        
        
    }
}
