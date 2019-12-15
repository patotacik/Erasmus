@extends('layout.mainlayout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/uvod.png')}});"
     data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    <div class="overlay"></div>
    <div class="mouse">
        <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
</div>

@section('content')

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Naša ponuka</span>
                    <h2 class="mb-2">Najlepší spôsob ako vycestovať</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-piggy-bank"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Získaš zaujímavý grant </h3>
                            <p>Výška grantu môže dosiahnúť aj 520€ na mesiac.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Naučíš sa cudzie jazyky</h3>
                            <p>Najväčšiou výhodou Erasmus pobytov sú jednoznačne cudzie jazyky. Ći to už je angličtina, alebo nejaký iný jazyk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Zistíš, kto si</h3>
                            <p>Na Erasme chodia študenti väčšinou sami.Práve nový začiatok v cudzej krajine človeku pomôže zistiť kto vlastne je, zistiť svoje silné a slabé stránky, objastniť si svoje priority.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Spoznáš nových ľudí</h3>
                            <p>Na erasme nebudete sami, ale s množstvo ľudí pochadzajúcimi zo všetkých kútov Európy s rovnakou chuťou socializovať sa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">erasmus+</span>
                    <h2 class="mb-2">Aktuálna ponuka</h2>
                </div>
            </div>
            <div class="row">
                @foreach($podujatia as $row)
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
                                <h3 class="display-2">{{$row->pocitadlo}} <span class="fa fa-eye"> </span></h3></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




    <section class="ftco-section ftco-degree-bg services-section img mx-md-5" style="background-image: url(images/mes.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-start mb-5">
                <div class="col-md-6 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Vyber, dohodni, vycestuj !</span>
                    <h2 class="mb-3">Ako to funguje</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>01</span></div>
                                    <h3>Podaj si žiadosť</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>02</span></div>
                                    <h3>Vyplň dotazník</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>03</span></div>
                                    <h3>Zúčasní sa pohovoru</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>04</span></div>
                                    <h3>A môžeš cestovať</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/lud.jpg);">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section p-md-5">
                        <h2 class="mb-4">Štúdium v zahraničí</h2>

                        <video width="400" controls>
                            <source src="https://ec.europa.eu/programmes/erasmus-plus/sites/erasmusplus2/files/videos/original/era-ka1-study-mobility_en.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>

         </div>
                </div>
            </div>
        </div>

    </section>
    <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-lg-10 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-1">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="305">0</strong>
                            <span>Počet zapojených<br>krajin </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-lg-10 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-1">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="3">0</strong>
                            <span>Aktuálni počet <br>ponuk</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-lg-10 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-1">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="19090">0</strong>
                            <span>Aktuálni počet <br>študentov na Erasme</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-10 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-1">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="1098540">0</strong>
                        <span>Celkový počet <br>študentov na Erasme</span>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">BLOG</span>
                    <h2 class="mb-3">Osobné skúsenosti študentov a profesorov</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach($hodnotenie as $rowa)
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">{{$rowa->Otazka_1}} ...</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/user.png)"></div>
                                        <div class="pl-3">
                                            <p class="name">{{$rowa->user_nazov->name}}</p>
                                            <span class="position">Účansík</span>
                                            <span class="fa fa-eye">{{$rowa->pocitadlo}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection