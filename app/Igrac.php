<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igrac extends Model
{
    public function bodovi_igrac_turnir()
    {
        return $this->hasMany(NastupTurnir::class, 'igrac_id');
    }

    public function bodovi_igrac_piramida()
    {
        return $this->hasMany(NastupPiramida::class, 'igrac_id');
    }
    
    public function igrac_piramida()
    {
        return $this->belongsToMany(TurnirPiramida::class, 'nastup_piramidas')->withPivot('bodovi');
    }
    public function igrac_turnir()
    {
        return $this->belongsToMany(TurnirPojedinacni::class, 'nastup_turnirs')->withPivot('bodovi');
    }

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->updated_at->format($format);
    }

    protected $fillable = ['ime', 'prezime', 'slika', 'prebivaliste', 'clanstvo', 'igra'];

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->slika))
        {
            $imagePath = public_path() . "/img/igraci/" . $this->slika;
            if (file_exists($imagePath)) $imageUrl = asset("img/igraci/" . $this->slika);
        }

        return $imageUrl;
    }
}
