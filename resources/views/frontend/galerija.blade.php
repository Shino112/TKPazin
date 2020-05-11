@extends('layouts.frontend')
@section('title', 'TK Pazin | Galerija')
@section('css')
    <link href="/css/style_galerija.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="container gallery-container">
    <h1 style="text-align:center; color: #ba3631;">Galerija</h1>
    <div class="tz-gallery">
        <div class="row">
            @foreach($albums as $album)
                <div class="col-sm-6 col-md-4 mt-5">
                    <a class="lightbox" href="{{ route('prikaz.albuma', $album->id) }}">
                    <img src="{{ $album->slika_albuma }}" alt="{{ $album->naslov }}">
                    </a>
                    <h3 style="text-align:center;">{{ $album->naslov }}</h3>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
