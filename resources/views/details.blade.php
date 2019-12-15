@extends('layout.mainlayout')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/detail.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h2 class="mb-2">{{$details->Nazov}}</h2>
                    <b>Univerzita: </b><p></p>
                    <span class="subheading">{{$details->podUni->nazov}}</span>
                    <h3>Mesto: {{$details->podMes->name}}</h3>
                    <h3 class="location">Krajina: {{$details->podKraj->name}}</h3>
                    <h3>Dátum: {{$details->datum}}</h3>
                </div>
            </div>
        </div>
                <div style="color:black;padding-left:15%;padding-right: 15%">
                    <h2 class="mb-2">Popis: </h2>
                    <p style="align: justify" color="black">{{$details->popis}}</p>

                </div>
                <div class="center" style="padding-left:15%; padding-right: 15%">
                    <img src="{{$details->Obrazok}}""alt="nananana" style="width: 100%" height="80%" >
                </div>

        </section>
@endsection
