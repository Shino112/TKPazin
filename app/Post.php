<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['naslov', 'tekst', 'slika'];
    
    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->updated_at->format($format);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->slika))
        {
            $imagePath = public_path() . "/img/novosti/" . $this->slika;
            if (file_exists($imagePath)) $imageUrl = asset("img/novosti/" . $this->slika);
        }

        return $imageUrl;
    }
}
