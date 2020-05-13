<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnirPiramida extends Model
{
    protected $fillable = ['naziv', 'sezona_id'];
    
    public function sezona_piramida()
    {
        return $this->belongsTo(Sezona::class, 'sezona_id');
    }

    public function nastup_igraca_piramida()
    {
        return $this->belongsToMany(Igrac::class, 'nastup_piramidas');
    }
}
