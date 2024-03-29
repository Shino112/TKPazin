<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NastupPiramida extends Model
{
    protected $fillable = ['bodovi', 'turnir_piramida_id', 'igrac_id'];

    public function bodovi_piramida_piramida()
    {
        return $this->belongsTo(TurnirPiramida::class, 'turnir_piramida_id');
    }

    public function bodovi_piramida_igrac()
    {
        return $this->belongsTo(Igrac::class, 'igrac_id');
    }
}
