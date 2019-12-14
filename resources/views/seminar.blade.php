@extends('layout.mainlayout')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/staz.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
        <div class="overlay"></div>
        <div class="container">

        </div>
    </div>
    </section>

    <div class="container">

                    <div class="row">
                        @foreach($seminar as $row)

                        <div class="col-md-10">

                                <div class="property-wrap ftco-animate">

                                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">

                                        <a href='{{route('erasmus.details',$row->id)}}' method="post" class="icon d-flex align-items-center justify-content-center btn-custom">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>{{$row->nazov_seminara}}</h3>
                                        <h3>Mesto: </h3>
                                        <h3>Univerzita: </h3>
                                        <h3 class="location">Krajina: </h3>
                                        <h3 class="date">Dátum:{{$row->datum_konania}}</h3>
                                            <span class="fa fa-eye"></span></a>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>

    </div>
@endsection