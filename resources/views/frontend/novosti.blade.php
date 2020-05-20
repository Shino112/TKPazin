@extends('layouts.frontend')
@section('title', 'TK Pazin | Novosti')
@section('content')
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading -->
    <h1 class="my-4">Rezervacije terena</h1>
    <div class="row m-2">
        <div class="col-12 col-md-6">
            <h3 id="teren">Teren 1</h3>
            <div class="resp-container">
                <iframe class="responsive-iframe" src="https://openresa.com/plannings-integrated?id=916&key=1939c9881c1a9fff6c4d64c19a154121fc2ddd1e57aca4410cdc64c7b8ca4c2ac0b528f8886e585d#date=0"></iframe>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h3 id="teren">Teren 2</h3>
            <div class="resp-container">
                <iframe class="responsive-iframe" src="https://openresa.com/plannings-integrated?id=917&key=35b78e5a8bd71d4bdc673cff101a2f264b4794a3cfa0a90de5f07dc448fe5c3efcc13daced7ba23c#date=0"></iframe>
            </div>
        </div>
    </div>
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
