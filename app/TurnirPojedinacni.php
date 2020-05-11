<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnirPojedinacni extends Model
{
    public function sezona_pojedinacni_turnir()
    {
        return $this->belongsTo(Sezona::class);
    }

    public function nastup_igraca_turnir()
    {
        return $this->belongsToMany(Igrac::class, 'nastup_turnirs');
    }
}
