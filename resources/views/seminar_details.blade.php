@extends('layout.mainlayout')
@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/pob.png')}});"
     data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    <div class="overlay"></div>
    <div class="container">

    </div>
</div>
</section>




<section class="ftco-section ftco-property-details">
    <div class="container">

        <div class="row">
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex">
                        <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Základné informacie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">O čom to bude</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check">Typ seminára: {{$seminar_details->Typ}}</li>
                                        <li class="check">Názov: {{$seminar_details->nazov_seminara}}</li>
                                        <li class="check">Dátum konania: {{$seminar_details->datum_konania}}</li>
                                        <li class="check">Čas konania: {{$seminar_details->cas_konanie}}</li>
                                        <li class="check">Miesto konania: {{$seminar_details->miesto_konania}} </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
<p>{{$seminar_details->detail}} </p>                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection