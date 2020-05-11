<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['naslov', 'slika_albuma'];
    
    public function slika()
    {
        return $this->hasMany(Slika::class);
    }

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->updated_at->format($format);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->slika_albuma))
        {
            $imagePath = public_path() . "/img/slike_albuma/" . $this->slika_albuma;
            if (file_exists($imagePath)) $imageUrl = asset("img/slike_albuma/" . $this->slika_albuma);
        }

        return $imageUrl;
    }

}
