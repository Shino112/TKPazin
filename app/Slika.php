<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slika extends Model
{
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->updated_at->format($format);
    }
}
