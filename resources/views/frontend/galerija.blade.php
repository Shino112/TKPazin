@extends('layouts.frontend')
@section('title', 'TK Pazin | Galerija')
@section('css')
    <link href="/css/grid-gallery.css" rel="stylesheet"/>
@endsection
@section('content')
    <h1 class="my-4">Galerija</h1>
    <div class="containeri">
        @foreach($albums as $album)
            <div class="gallery-container w-3 h-2">
            <div class="gallery-item">
                <div class="image">
                <a href="{{ route('prikaz.albuma', $album->id) }}"><img src="{{ $album->slika_albuma }}" alt="{{ $album->naslov}}"></a>
                </div>
                <div class="text">{{ $album->naslov}}</div>
            </div>
            </div>
        @endforeach
    </div>
@endsection
