@extends('layouts.frontend')
@section('title', 'TK Pazin | Rezervacija terena')
@section('content')
    <div class="container">
        <h1 class="my-4">Rezervacije terena</h1>
        <div class="row m-2">
            <div class="col-12 col-lg-4 mt-4 mb-4">
                <h3 id="teren">Teren 1</h3>
                <div class="resp-container">
                    <iframe class="responsive-iframe" src="https://openresa.com/plannings-integrated?id=916&key=1939c9881c1a9fff6c4d64c19a154121fc2ddd1e57aca4410cdc64c7b8ca4c2ac0b528f8886e585d#date=0"></iframe>
                </div>
            </div>
            <div class="col-12 col-lg-4 mt-4 mb-4">
                <h3 id="teren">Teren 2</h3>
                <div class="resp-container">
                    <iframe class="responsive-iframe" src="https://openresa.com/plannings-integrated?id=917&key=35b78e5a8bd71d4bdc673cff101a2f264b4794a3cfa0a90de5f07dc448fe5c3efcc13daced7ba23c#date=0"></iframe>
                </div>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <div class="media m-4">
                    <div class="mr-3"><a href="https://drive.google.com/file/d/1wLvGvomksRBbDuL9xVS_r-xVVLRDE1Sq/view?usp=sharing" target="_blank"><i
                        class="far fa-file-pdf fa-3x" style="color: #dc3545"></i></a></div>
                    <div class="media-body mt-3">
                        <a href="https://drive.google.com/file/d/1wLvGvomksRBbDuL9xVS_r-xVVLRDE1Sq/view?usp=sharing" target="_blank">
                        <h5 class="mt-0">Upute za korištenje sustava za rezervaciju terena</h5>
                        </a>
                    </div>
                </div>
                <a href="https://openresa.com/club/TKPazin" target="_blank" class="btn btn-outline-danger mb-4">Poveznica na sustav za rezerviranje terena</a>
            </div>
        </div>
    </div>
@endsection
