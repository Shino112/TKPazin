@extends('layouts.frontend')
@section('title', 'TK Pazin | ' . $post->naslov)
@section('content')
        <!-- Page Content -->
    <div class="container">
    <div class="row">
        <div class="col-4" style="margin-top: 25px; max-width: 184px;"><a href="{{ route('novosti')}}" class="btn btn-info">Povratak na početnu stranicu</a></div>
    </div>
    <div class="row">
        <div class="col-12">
            <h1 class="my-4" style="text-align:center; color: #ba3631;">{{ $post->naslov }}</h1>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="{{ $post->slika }}" alt="{{ $post->naslov }}">
            <div class="card-body">
                {!! Markdown::convertToHtml($post->tekst) !!}
            </div>
            <div class="card-footer bg-transparent border-info"><h6>Objavljeno: {{ $post->created_at->diffForHumans() }}</h6></div>
        </div>
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
