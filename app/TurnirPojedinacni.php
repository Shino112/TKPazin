<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnirPojedinacni extends Model
{
    protected $fillable = ['naziv', 'sezona_id', 'zdrijeb'];
    
    public function sezona_pojedinacni_turnir()
    {
        return $this->belongsTo(Sezona::class, 'sezona_id');
    }

    public function nastup_igraca_turnir()
    {
        return $this->belongsToMany(Igrac::class, 'nastup_turnirs');
    }

    public function bodovi_turnir()
    {
        return $this->hasMany(NastupTurnir::class, 'turnir_pojedinacni_id');
    }
}
