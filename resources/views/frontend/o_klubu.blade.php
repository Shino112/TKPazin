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
            <div class="col-lg-3 mb-5">
                <div class="align-center">
                <i class="fas fa-landmark fa-5x mar-bot20"></i>
                <h4 class="text-bold">O klubu:</h4>
                <p>Teniski klub "Pazin" ima sjedište u Pazinu, Gradskih igrališta bb. Smješten je između nogometnog
                    igrališta Pazinke, dvorane osnovne škole i PIN-a. Ima dva terena s kvalitetnom reflektorskom
                    rasvjetom. Klub broji oko 90 igrača raznih kategorija. Klub je osnovan 1991. godine.
                </p>
                </div>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="align-center">
                <i class="far fa-money-bill-alt fa-5x mar-bot20"></i>
                <h4 class="text-bold">Članarina:</h4>
                <p>Godišnja članarina iznosi <strong>200 kn</strong>, a učlaniti se mogu svi građani RH. Za
                    uplatnicu nazvati <a href="tel:+385 98 4341 33" style="color:#3867d6; font-weight:bold;">+385 98
                    4341 33</a>. Za članove učenike i studente godišnja članarina iznosi <strong>50 kn</strong>.
                </p>
                </div>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="align-center">
                <i class="fas fa-calendar-alt fa-5x mar-bot20"></i>
                <h4 class="text-bold">Rezervacija terena:</h4>
                <p>Rezervacija terena se vrši obavezno dan ranije na tel. <a href="tel:+385 98 4341 33"
                    style="color:#3867d6; font-weight:bold;">+385
                    98 4341 33</a>. Sat igranja za članove iznosi <strong>10 kn</strong> po igraču. Igranja za
                    članove učenike radnim danom do 15 sati je <strong>besplatno</strong> a u ostalim terminima
                    iznosi isto kao i za ostale članove. Za ostale koji nisu članovi kluba naplaćuje se po <strong>40
                    kn</strong> sat a minimalno se može rezervirati 2 sata.
                </p>
                </div>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="align-center">
                <i class="fas fa-baseball-ball fa-5x mar-bot20"></i>
                <h4 class="text-bold">Teniska škola:</h4>
                <p>Termin za školu tenisa je utorak i četvrtak a naplaćuje se <strong>100 kn</strong> mjesečno.
                    Novac se uplaćuje na račun Kluba (informacije na tel. <a href="tel:+385 98 9768 806"
                        style="color:#3867d6; font-weight:bold;">+385
                    98 9768 806</a>), a školu vodi Antonio Pužar.
                </p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- about -->
    <section id="section-about" class="section appear clearfix" style="background-color: #b6b6b6;">
    <div class="container">
        <h1 class="mb-5 pb-3" style="text-align:center; color: #ba3631;">Vodstvo kluba</h1>
        <div class="row align-center mar-bot40">
            <div class="col-md-4">
                <div class="team-member">
                <figure class="member-photo"><img src="/img/vodstvo_kluba/member1.jpg" alt=""/></figure>
                <div class="team-detail">
                    <h4>Đino Lovrinić</h4>
                    <span>Predsjednik kluba</span>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                <figure class="member-photo"><img src="/img/vodstvo_kluba/member1.jpg" alt=""/></figure>
                <div class="team-detail">
                    <h4>Vjekoslav Krajcar</h4>
                    <span>Dopredsjednik kluba</span>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                <figure class="member-photo"><img src="/img/vodstvo_kluba/member1.jpg" alt=""/></figure>
                <div class="team-detail">
                    <h4>Ferdo Milanović</h4>
                    <span>Tajnik kluba</span>
                </div>
                </div>
            </div>
        </div>
        <div class="row align-center mar-bot40">
            <div class="col-md-6">
                <div class="team-member">
                <figure class="member-photo"><img src="/img/vodstvo_kluba/member1.jpg" alt=""/></figure>
                <div class="team-detail">
                    <h4>Milan Krajcar</h4>
                    <span>Ćlan upravnog odbora</span>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-member">
                <figure class="member-photo"><img src="/img/vodstvo_kluba/member1.jpg" alt=""/></figure>
                <div class="team-detail">
                    <h4>Zoran Bravar</h4>
                    <span>Ćlan upravnog odbora</span>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /about -->
@endsection
