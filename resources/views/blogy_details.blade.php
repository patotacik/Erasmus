@extends('layout.mainlayout')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/detail.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <b>Otázky a odpovede: </b><p></p>
                    <h2 class="mb-2">{{$blogy_details->Otazka_1}}</h2>
                    <h2 class="mb-2">{{$blogy_details->Otazka_2}}</h2>
                    <h2 class="mb-2">{{$blogy_details->Otazka_3}}</h2>
                    <h2 class="mb-2">{{$blogy_details->Otazka_4}}</h2>
                    <b>Komentar: </b>{{$blogy_details->hodKom->koment}}<p></p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
@endsection
