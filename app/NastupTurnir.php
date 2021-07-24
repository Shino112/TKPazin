<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NastupTurnir extends Model
{
    protected $fillable = ['bodovi', 'turnir_pojedinacni_id', 'igrac_id'];

    public function bodovi_pojedinacni_turnir_turnir()
    {
        return $this->belongsTo(TurnirPojedinacni::class, 'turnir_pojedinacni_id');
    }

    public function bodovi_pojedinacni_turnir_igrac()
    {
        return $this->belongsTo(Igrac::class, 'igrac_id');
    }

}
