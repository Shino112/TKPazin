@extends('layouts.frontend')
@section('title', 'TK Pazin | Novosti')
@section('content')
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading -->
    <h1 class="my-4" style="text-align:center; color: #ba3631;">Novosti</h1>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="{{ route('prikaz.novosti', $post->id) }}"><img class="card-img-top" src="{{ $post->slika }}" alt="{{ $post->naslov }}"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ route('prikaz.novosti', $post->id) }}">{{ $post->naslov }}</a>
                    </h4>
                    {!! Markdown::convertToHtml($post->tekst) !!}
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
