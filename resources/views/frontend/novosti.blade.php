@extends('layouts.frontend')
@section('title', 'TK Pazin | Novosti')
@section('content')
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading -->
    
    <h1 class="my-4">Novosti</h1>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="{{ route('prikaz.novosti', $post->id) }}"><img class="card-img-top" src="{{ $post->slika }}" alt="{{ $post->naslov }}"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ route('prikaz.novosti', $post->id) }}">{{ $post->naslov }}</a>
                    </h4>
                    @if (strlen($post->tekst) >= 200)
                        {!! substr(Markdown::convertToHtml($post->tekst), 0, 200) !!}...
                        <br>
                        <a href="{{ route('prikaz.novosti', $post->id) }}" class="btn btn-light m-2 float-right">Pročitaj više</a>
                    @else
                        {!! Markdown::convertToHtml($post->tekst) !!}
                    @endif
                </div>
                <div class="card-footer bg-transparent border-info"><h6>Objavljeno: {{ $post->created_at->diffForHumans() }}</h6></div>
            </div>
        </div>
        @endforeach
    </div>
    
    <nav>
        {{ $posts->links() }}
    </nav>

    </div>
    <!-- /.container -->
@endsection
