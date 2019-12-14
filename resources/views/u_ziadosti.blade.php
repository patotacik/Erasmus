@extends('layout.mainlayout')
@section('content')

    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/schvalene.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Tvoje pobyty</span>
                    <h2 class="mb-2">Nezabudni na vyplnenie dotazníku</h2>
                </div>
                @foreach($details as $row)
                    <div class="col-md-3">
                        <div class="property-wrap ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{ URL::asset('images/hod1.png')}});">
                                <a href='{{route('potvrdene.formular',$row->id)}}' method="post" class="icon d-flex align-items-center justify-content-center btn-custom">
                                    <span class="glyphicon glyphicon-heart"></span> </a>
                            </div>
                            <div class="text">
                                <h3>{{$row->Nazov}}</h3>
                                <h3>Dátum: {{$row->datum}}</h3>
                                <h3 class="location">Miesto: {{$row->Miesto}}</h3>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>


@endsection