@extends('layout.mainlayout')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/uvod.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>
    </section>
    <section class="ftco-section">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                        <span class="subheading">Ponuka erazmus+</span>
                        <h2 class="mb-2">Najžiadanejšie ponuky</h2>
                    </div>
                    @foreach($podujatia as $row)
                    <div class="col">
                        <div class="property-wrap ftco-animate">
                            <a href='{{route('erasmus.details',$row->id)}}' method="post" class="img" style="background-image: url(images/work-1.jpg);"></a>

                            <div class="text">
                                <h3>{{$row->Nazov}}</h3>
                                <h3>Dátum: {{$row->datum}}</h3>
                                <h3 class="location">Miesto: {{$row->Miesto}}</h3>
                                <a href='{{route('erasmus.details',$row->id)}}' method="post" class="d-flex align-items-center justify-content-center btn-custom">
                                    <span class="ion-ios-link"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
    </section>

    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
