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
                    <img src="{{$details->Obrazok}}" alt="nananana" style="width: 100%" height="80%" >
                </div>



        </section>
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{ URL::asset('images/study.png')}});">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate">
                    < class="heading-section">
                        <h2 class="mb-4">Online prihláška</h2>

<P>Na mobilitu (stáž) Erasmus+ sa môže prihlásiť akýkoľvek (i zahraničný) študent riadne zapísaný
    v niektorom študijnom programe UKF. Erasmus stáž môže absolvovať už študent 1.ročníka Bc.
    štúdia, no v tom istom akademickom roku musí byť riadne schválený na stáž. Ako čerstvý
    absolvent (bývalý študent UKF) môžeš byť schválený na Erasmus+ stáž za podmienky, že si
    schválený na mobilitu ešte počas posledného ročníka štúdia na VŠ a stáž môžeš absolvovať
    max. do 1 roka od ukončenia štúdia (úspešného absolvovania štátnic) na UKF. Počas štúdia
    máš možnosť zúčastniť sa Erasmus+ mobility (štúdium alebo stáž) v každom stupni štúdia
    maximálne po dobu 12 mesiacov. Pri určení nároku na dĺžku Tvojej Erasmus+ mobility sa berú
    do úvahy predchádzajúce mobility v rámci programu LLP/Erasmus i Erasmus+ (aj napr. mobilita
    cez EÚ projekt Capacity Building a pod.) realizované v rámci Tvojho súčasného stupňa štúdia
    (u absolventov v rámci posledného ukončeného stupňa štúdia).</P>
                        <p>Prihlasovanie prebieha výlučne prostredníctvom aplikácie StudyAbroad (ďalej len aplikácia)
                            na www.studyabroad.sk. Ak si si vybral miesto svojej stáže, postupuje nasledovne:
                            1. zaregistruj sa v aplikácii (ak si tak neurobil ešte v minulosti),
                            2. aktivuj si konto v aplikácii prostredníctvom aktivačného linku, ktorý dostaneš e-mailom,
                            3. prihlás sa do aplikácie e-mailom a heslom, ktoré si uviedol pri registrácii do aplikácie,
                            4. vyplň formulár s osobnými údajmi a ulož tieto údaje,
                            5. založ, ulož a odošli prihlášku na stáž Erasmus (vpravo v časti „Uchádzač“) vrátane
                            ďalších požadovaných podkladov, ktoré si do aplikácie nahral. Prihlášku musíš mať
                            v stave „odoslaná“, inak ju koordinátor UKF neuvidí a nevie schváliť!</p>
                    <p>Po tom už len sleduj na tejto stánke či ti pobyt bol schválení</p>
                    <p>A nezabudni po skoncení pobytu vyplniť spätný dotazník</p>

                @guest
                        @else
                            @if(Auth::user()->isUcasnik())
                        <p><a href="https://studyabroad.sk/?backlink=gajea&type=prihlaska_staz&akademicky_rok_id=14&_fid=sr9l" class="btn btn-primary">Prihlás sa na pobyt pomocoou</a></p>
                            @endif
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 style="font-weight: 600; font-size: 20px;">Erasmus+ Charta študenta</h3>
<p> Erasmus+ Charta študenta
    Hneď po schválení mobility dostaneš Erasmus+ Chartu. Charta sumarizuje Tvoje práva a
    povinnosti a informuje Ťa, čo môžeš očakávať od prijímajúcej i vysielajúcej inštitúcie. Charta je
    rozdelená na 3 časti (pred mobilitou, počas mobility, po ukončení mobility) a pomáha Ti pri
    organizácií svojej mobility. Erasmus Charta študenta je verejne prístupná aj na internetovej
    stránke UKF
</p>                </div>
                <div class="col-md-4">
                    <h3 style="font-weight: 600; font-size: 20px;">Our Vission</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-md-4">
                    <h3 style="font-weight: 600; font-size: 20px;">Our Value</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
