@extends('layout.mainlayout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/uvod.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>

@if(count($finalResult))
    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">erasmus+</span>
                    <h2 class="mb-2">Výsledky hľadania</h2>
                </div>
            </div>

            <div class="row">
                @foreach($finalResult as $row)
                    <div class="col-md-4">
                        <div class="property-wrap ftco-animate">
                            <img src="{{$row->Obrazok}}" class="img d-flex align-items-center justify-content-center">
                            <div class="text">
                                <h3>{{$row->Nazov}}</h3>
                                <h3>Mesto: {{$row->podMes->name}}</h3>
                                <h3>Univerzita: {{$row->podUni->nazov}}</h3>
                                <h3 class="location">Krajina: {{$row->podKraj->name}}</h3>
                                <h3 class="date">Dátum: {{$row->datum}}</h3>
                                <h3 class="date">Popis: {{str_limit($row->popis, 40)}}</h3>
                                <a href='{{route('erasmus.details',$row->id)}}' method="post" class="d-flex align-items-center justify-content-center btn-custom">
                                    <span class="fa fa-eye"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @else
    <h1>Data nenajdene</h1>
    @endif
@endsection
