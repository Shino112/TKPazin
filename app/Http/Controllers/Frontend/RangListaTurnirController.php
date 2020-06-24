<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sezona;
use App\TurnirPojedinacni;
use App\NastupTurnir;
use App\Igrac;

class RangListaTurnirController extends Controller
{
    public function show($id)
    {
        $sesija = Session::flash('odabrana_godina', $id);
        
        $sezone = Sezona::orderBy('godina', 'desc')->get();
        
        $sezona = Sezona::findOrFail($id);

        

        //Sva kola koja su u toj sezoni, u array spremi id od tih kola
        $kola_id = TurnirPojedinacni::where('sezona_id', $id)->pluck('id');
        

        //provjera pomocu koje vidimo da li ima turnira za tu sezonu inace ispisuje poruku da ne dobivamo sql gresku
        if (isset($kola_id) && count($kola_id) > 0) {
            //varijable zadnji_turnir, kola_id2 i igraci 2 sluze kao queriji za dobiti bodove igrača bez zadnjeg odigranog turnira. Taj query koristimo poslije u usporedbi da li nam je igrač ostao na istoj poziciji ili otišao dolje ili gore
            $zadnji_turnir = TurnirPojedinacni::where('sezona_id', $id)->orderBy('id', 'desc')->first();
            
            $kola_id2 = TurnirPojedinacni::where('sezona_id', $id)->where('id', '<>', $zadnji_turnir->id)->pluck('id');

            //Svi id-evi igraca koji su u tom kolu spremi u array
            $odabrani = NastupTurnir::where('turnir_pojedinacni_id', $kola_id)->pluck('igrac_id');
            // query za sve igrače gdje joinamo tablicu s bodovima i s igračima izradimo novo polje ukupno za sumu bodova, grupiramo po igračima i order po sumi od najveće sume
            $igraci = Igrac::whereIn('id', $odabrani)
                ->leftjoin('nastup_turnirs', 'igracs.id','=','nastup_turnirs.igrac_id')
                ->whereIn('nastup_turnirs.turnir_pojedinacni_id', $kola_id)
                ->selectRaw('igracs.*, SUM(nastup_turnirs.bodovi) AS ukupno')
                ->groupBy('igracs.id')
                ->orderBy('ukupno', 'desc')
                ->get();

            $igraci2 = Igrac::whereIn('id', $odabrani)
                ->leftjoin('nastup_turnirs', 'igracs.id','=','nastup_turnirs.igrac_id')
                ->whereIn('nastup_turnirs.turnir_pojedinacni_id', $kola_id2)
                ->selectRaw('igracs.*, SUM(nastup_turnirs.bodovi) AS ukupno')
                ->groupBy('igracs.id')
                ->orderBy('ukupno', 'desc')
                ->get();
            
            $kola = TurnirPojedinacni::where('sezona_id', $id)->get();
            
            //dd($kola_id1);

            if (isset($kola_id2) && count($kola_id2) > 0){
                return view("frontend.ranglista_turnir_kola", compact('sezone', 'sezona', 'igraci', 'kola', 'kola_id', 'igraci2', 'zadnji_turnir', 'kola_id2', 'sesija'))->render();
            }
            else {
                return view("frontend.ranglista_turnir_kola_single", compact('sezone', 'sezona', 'igraci', 'kola', 'kola_id', 'igraci2', 'zadnji_turnir', 'kola_id2', 'sesija'))->render();
            }
        }
        else {
            return view("frontend.ranglista_turnir_kola_empty", compact('sezone', 'sezona', 'kola_id', 'sesija'))->render();
        }
    }
}
