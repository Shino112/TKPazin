@extends('layouts.frontend')
@section('title', 'TK Pazin | O klubu')
@section('css')
    <link href="/css/style_onama.css" rel="stylesheet"/>
@endsection
@section('content')
        <!-- services -->
    <section id="section-services" class="section pad-bot30" style="background-color: #fed330;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="align-center">
                <i class="fas fa-landmark fa-5x mar-bot20"></i>
                <h4 class="text-bold">O klubu:</h4>
                <p>Teniski klub "Pazin" ima sjedište u Pazinu, Gradskih igrališta bb. Smješten je između nogometnog
                    igrališta Pazinke, dvorane osnovne škole i PIN-a. Ima dva terena s kvalitetnom reflektorskom
                    rasvjetom. Klub broji oko 90 igrača raznih kategorija. Klub je osnovan 1991. godine.
                </p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="align-center">
                <i class="far fa-money-bill-alt fa-5x mar-bot20"></i>
                <h4 class="text-bold">Članarina:</h4>
                <p>Godišnja članarina iznosi <strong>200 kn</strong>, a učlaniti se mogu svi građani RH. Za
                    uplatnicu nazvati <a href="tel:+385 98 8732 54" style="color:#3867d6; font-weight:bold;">+385 98
                    8732 54</a>. Za članove učenike i studente godišnja članarina iznosi <strong>50 kn</strong>.
                </p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="align-center">
                <i class="fas fa-calendar-alt fa-5x mar-bot20"></i>
                <h4 class="text-bold">Rezervacija terena:</h4>
                <p>Rezervacija terena se vrši obavezno dan ranije na tel. <a href="tel:+385 98 8732 54"
                    style="color:#3867d6; font-weight:bold;">+385
                    98 8732 54</a>. Sat igranja za članove iznosi <strong>10 kn</strong> po igraču. Igranja za
                    članove učenike radnim danom do 15 sati je <strong>besplatno</strong> a u ostalim terminima
                    iznosi isto kao i za ostale članove. Za ostale koji nisu članovi kluba naplaćuje se po <strong>40
                    kn</strong> sat a minimalno se može rezervirati 2 sata.
                </p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- about -->
    <section id="section-about" class="section appear clearfix" style="background-color: #000000;">
    <div class="container">
        <h1 class="my-4" style="text-align:center; color: #FFFFFF; text-transform: uppercase;">Vodstvo kluba</h1>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card text-black mb-3 mx-auto" style="max-width: 18rem; background-color: #FF9F33;">
                <div class="card-body">
                    <h5 class="card-title text-center">Alen Bakša</h5>
                    <p class="card-text text-center">Potpredsjednik kluba</p>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card text-black mb-3 mx-auto" style="max-width: 18rem; background-color: #FF9F33;">
                <div class="card-body">
                    <h5 class="card-title text-center">Marko Bačić</h5>
                    <p class="card-text text-center">Predsjednik kluba</p>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card text-black mb-3 mx-auto" style="max-width: 18rem; background-color: #FF9F33;">
                <div class="card-body">
                    <h5 class="card-title text-center">Vjeko Krajcar</h5>
                    <p class="card-text text-center">Tajnik kluba</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /about -->
@endsection
