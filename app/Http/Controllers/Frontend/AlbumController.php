<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Album;
use App\Slika;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::orderBy('created_at', 'desc')->get();

        return view("frontend.galerija", compact('albums'))->render();
    }

    public function show($id)
    {
        $album = Album::FindOrFail($id);

        $slike = Slika::where('album_id', $id)->get();

        return view('frontend.album', compact('album', 'slike'))->render();
    }
}
