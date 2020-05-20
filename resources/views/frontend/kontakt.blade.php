@extends('layouts.frontend')
@section('title', 'TK Pazin | Kontakt')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-12 m-2">
            @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
            @endif 
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 mt-5 mb-5">
            <h1>Osnovne informacije</h1>
            <!-- Buttons-->
            <div class="row text-center">
                <div class="col-md-12 mt-5">
                    <a href="https://goo.gl/maps/QhTz2mtSqas6R13N8" class="btn-floating blue accent-1">
                    <i class="fas fa-map-marker-alt"></i>
                    </a>
                    <p style="color:#007bff;">Ulica Gradskih igrališta bb</p>
                    <p style="color:#007bff;" class="mb-md-0">52000 Pazin</p>
                    <hr>
                </div>
                <div class="col-md-12">
                    <a href="tel:098-434-133" class="btn-floating blue accent-1">
                    <i class="fas fa-phone"></i>
                    </a>
                    <a href="tel:098-873-254">
                        <p>098 873 254</p>
                    </a>
                    <hr>
                </div>
                <div class="col-md-12">
                    <a href="mailto:tkpazin@gmail.com" class="btn-floating blue accent-1">
                    <i class="fas fa-envelope"></i>
                    </a>
                    <a href="mailto:tkpazin@gmail.com">
                        <p>tkpazin@gmail.com</p>
                    </a>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 mt-5 mb-5">
            <h1 class="mb-4">Lokacija</h1>
            <!--Google map-->
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11237.394124410826!2d13.9413099!3d45.2407445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a5294e3740dfc5!2sTENISKI+KLUB+PAZIN!5e0!3m2!1shr!2shr!4v1564512525975!5m2!1shr!2shr"
                frameborder="0"
                style="border:0" allowfullscreen></iframe>
            </div>
            <!--Google Maps-->
        </div>
    </div>
    <form method="post" action="kontakt">
        {{csrf_field()}}
        <div class="row">
            <div class="col-12 col-lg-6 mb-3 mx-auto">
                <p style="font-weight: bold; font-size: 25px; color: #ffffff">Vaše ime</p>
                <input type="text" class="form-control @error('ime') is-invalid @enderror" placeholder="Ovdje unesite svoje ime" name="ime">
                @error('ime')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                @enderror
            </div>
            <div class="col-12 col-lg-6 mb-3 mx-auto">
                <p style="font-weight: bold; font-size: 25px; color: #ffffff">Vaše prezime</p>
                <input type="text" class="form-control @error('prezime') is-invalid @enderror" placeholder="Ovdje unesite svoje prezime" name="prezime">
                @error('prezime')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 mb-3 mx-auto">
                <p style="font-weight: bold; font-size: 25px; color: #ffffff">E-mail adresa</p>
                <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                </div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ovdje unesite svoju e-mail adresu"
                    name="email">
                    @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-3 mx-auto">
                <p style="font-weight: bold; font-size: 25px; color: #ffffff">Broj telefona</p>
                <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-phone"></i></div>
                </div>
                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Ovdje unesite svoj broj telefona"
                    name="phone_number">
                    @error('phone_number')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                   <p style="font-weight: bold; font-size: 25px; color: #ffffff">Naslov poruke</p>
                   <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Ovdje unesite naslov poruke" name="subject">
                   @error('subject')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mb-3 mx-auto">
                <p style="font-weight: bold; font-size: 25px; color: #ffffff">Poruka</p>
                <textarea class="form-control @error('message') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"
                placeholder="Ovdje unesite svoju poruku" name="message"></textarea>
                @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mb-3 mx-auto">
                <button type="submit" class="btn btn-primary"
                style="background-color:#FF9F33; border-color: #FF9F33; min-width:150px; min-height:50px; font-size: 30px; font-weight:bold;">
                Pošalji
                </button>
            </div>
        </div>
    </form>
    </div>
@endsection