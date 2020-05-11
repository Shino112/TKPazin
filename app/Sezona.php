<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sezona extends Model
{
    protected $fillable = ['godina'];
    
    public function turnir_pojedinacni()
    {
        return $this->hasMany(TurnirPojedinacni::class);
    }
    public function piramida()
    {
        return $this->hasMany(TurnirPiramida::class);
    }
    public function getRouteKeyName()
    {
        return 'godina';
    }
    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->updated_at->format($format);
    }
}
