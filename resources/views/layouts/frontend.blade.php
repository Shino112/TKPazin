<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="YljEc60aJm4Xi8A_Nvpva7_Mq0GsjdfNfklshmuKTkc" />
    <meta name="keywords" content="tenis, Tenis, TK, Pazin, TK Pazin, Teniski klub Pazin, tereni, teniski tereni">
    <title>@yield('title', 'TK Pazin')</title>
    <link href="/css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('css')

</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #000000;">
        <a class="navbar-brand" href="{{ route('novosti') }}">
            <img src="/img/logo.gif" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link navigacija-link" href="{{ route('novosti') }}">Novosti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigacija-link" href="/rezervacija-terena">Rezervacija terena</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigacija-link" href="{{ route('pojedinacni.turnir', \App\Sezona::orderBy('godina', 'desc')->pluck('id')->first()) }}">Pojedinačni turniri</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navigacija-link" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rang-liste
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #000000;">
                        <a class="dropdown-item navigacija-podlink" href="{{ route('ranglista.turnir.kola', \App\Sezona::orderBy('godina', 'desc')->pluck('id')->first()) }}">Pojedinačni turniri</a>
                        <a class="dropdown-item navigacija-podlink" href="{{ route('ranglista.piramida.kola', \App\Sezona::orderBy('godina', 'desc')->pluck('id')->first()) }}">Piramida</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigacija-link" href="/o-klubu">O klubu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigacija-link" href="/galerija">Galerija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigacija-link" href="/kontakt">Kontakt</a>
                </li>
                <li class="nav-item mt-2" id="slika-meni">
                    <img src="/img/2.png" alt="Responsive image">
                </li>
            </ul>
        </div>
        <span class="navbar-text" id="slika-desno">
            <img src="/img/2.png" alt="Responsive image">
        </span>
    </nav>
<div style="margin-bottom: 75px;"></div>
<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
		<li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/karoseli/small/1.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/small/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/small/3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/small/4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/small/5.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/small/6.JPG" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Prethodni</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Sljedeći</span>
    </a>
</div>
<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
		<li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/karoseli/big/1.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/big/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/big/3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/big/4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/big/5.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/karoseli/big/6.JPG" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Prethodni</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Sljedeći</span>
    </a>
</div>

@yield('content')

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>Rezervacija terena: <a href="tel:098-873-254" style="color:#FF9F33; font-weight: 700; font-size:medium;">098 873 254</a></small>
        <br>
        <small>Copyright &copy; 2020 Tenis klub Pazin - Sva prava pridržana</small>
        <br>
        <small>Izradili: <a href="https://www.linkedin.com/in/luka-oto%C4%8Dan-643a301a4/" target="_blank">Luka Otočan</a> i <a href="https://www.facebook.com/filip.basa" target="_blank">Filip Baša</a></small>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/397f775e9a.js"></script>
@yield('script')
</body>
</html>
