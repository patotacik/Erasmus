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
                    <img src="{{ URL::asset($details->Obrazok)}}"alt="nananana" style="width: 100%" height="80%" >
                </div>
        </section>
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{ URL::asset('images/study.png')}});">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate">
                    <div class="heading-section">
                        <h2 class="mb-4">Online Registrácia na pobyt</h2>
<p> Prihláška na stáž
    Na mobilitu (stáž) Erasmus+ sa môže prihlásiť akýkoľvek (i zahraničný) študent riadne zapísaný
    v niektorom študijnom programe UKF. Erasmus stáž môže absolvovať už študent 1.ročníka Bc.
    štúdia, no v tom istom akademickom roku musí byť riadne schválený na stáž. Ako čerstvý
    absolvent (bývalý študent UKF) môžeš byť schválený na Erasmus+ stáž za podmienky, že si
    schválený na mobilitu ešte počas posledného ročníka štúdia na VŠ a stáž môžeš absolvovať
    max. do 1 roka od ukončenia štúdia (úspešného absolvovania štátnic) na UKF. Počas štúdia
    máš možnosť zúčastniť sa Erasmus+ mobility (štúdium alebo stáž) v každom stupni štúdia
    maximálne po dobu 12 mesiacov. Pri určení nároku na dĺžku Tvojej Erasmus+ mobility sa berú
    do úvahy predchádzajúce mobility v rámci programu LLP/Erasmus i Erasmus+ (aj napr. mobilita
    cez EÚ projekt Capacity Building a pod.) realizované v rámci Tvojho súčasného stupňa štúdia
    (u absolventov v rámci posledného ukončeného stupňa štúdia).
</p>
                        <p>Prihlasovanie prebieha výlučne prostredníctvom aplikácie StudyAbroad (ďalej len aplikácia).ň
                            Ak si si vybral miesto svojej stáže, postupuje nasledovne:
                            1. zaregistruj sa v aplikácii (ak si tak neurobil ešte v minulosti),
                            2. aktivuj si konto v aplikácii prostredníctvom aktivačného linku, ktorý dostaneš e-mailom,
                            3. prihlás sa do aplikácie e-mailom a heslom, ktoré si uviedol pri registrácii do aplikácie,
                            4. vyplň formulár s osobnými údajmi a ulož tieto údaje,
                            5. založ, ulož a odošli prihlášku na stáž Erasmus (vpravo v časti „Uchádzač“) vrátane
                            ďalších požadovaných podkladov, ktoré si do aplikácie nahral. Prihlášku musíš mať
                            v stave „odoslaná“, inak ju koordinátor UKF neuvidí a nevie schváliť!
                        </p>
                    <p>Následne si môžes na tejto stranke pozriet či ti bola žiadosť schválena.</p>
                    <p>Nezabudni po skončení pobytu vyplnit dotazník.</p>


                        @guest
                        @else
                            @if(Auth::user()->isUcasnik())
                        <p><a href="https://studyabroad.sk/" class="btn btn-primary">Prihlásiť sa</a></p>
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
                    <h3 style="font-weight: 600; font-size: 20px;">Výberové konanie na katedre
                        Katedrový Erasmus koordinátor je povinný vypísať a zrealizovať výberové konanie</h3>
                <p>(vrátane kritérií výberu) na obsadenie miest pre Erasmus+ študijný pobyt max. do počtu miest uvedených v jednotlivých Erasmus+ dohodách katedry s partnerskými vysokoškolskými
                    inštitúciami. Podmienky, ktoré bude katedrová komisia pri výbere posudzovať, si stanovuje
                    katedra sama (najčastejšie študijný priemer, znalosť cudzieho jazyka, úspechy študenta na
                    ŠVOČ, reprezentovanie UKF doma/v zahraničí, členstvo v sekcii ESN UKF a pod.). Výberové
                    konanie na študijný pobyt musia absolvovať všetci prihlásení študenti, ktorí pokračujú do
                    ďalšieho ročníka alebo ďalšieho stupňa štúdia. </p>
                </div>
                <div class="col-md-4">
                    <h3 style="font-weight: 600; font-size: 20px;">Schválenie študijného pobytu</h3>
<p>OMV UKF spracuje zoznam uchádzačov a predloží ho Komisii pre medzinárodnú spoluprácu
    UKF (zloženej z Inštitucionálneho Erasmus koordinátora a z fakultných Erasmus koordinátorov),
    ktorá schváli študijný pobyt navrhnutým študentom (maximálne do výšky kvóty študentov
    stanovenej pre celú UKF) a dĺžku pobytu v mesiacoch. V prípade veľkého záujmu o študijný
    pobyt sa bude pri schvaľovaní študenta prihliadať na to, či už študent v minulosti absolvoval
    nejakú Erasmus mobilitu. V takom prípade bude mať jeho prihláška nižšiu prioritu. Program
    Erasmus+ umožňuje aj tzv. „nulový grant Erasmus+ študenta“ (na štúdium alebo stáž). Študent
    s tzv. „nulovým grantom“ môže absolvovať študijný pobyt/stáž, ak splní všetky povinnosti
    a kritéria oprávnenosti Erasmus+ študenta a bude mať všetky jeho výhody mimo pridelenia
    grantu. Všetky pravidlá vzťahujúce sa na Erasmus+ študenta okrem tých, ktoré sú spojené
    s udelením grantu, platia aj pre študenta s nulovým grantom. Študent, nominovaný katedrou
    a ochotný vycestovať na mobilitu bez Erasmus grantu, bude mať pri schvaľovaní vyššiu prioritu. </p>                </div>
                <div class="col-md-4">
                    <h3 style="font-weight: 600; font-size: 20px;">Erasmus+ Charta študenta
                    </h3>
<p> Erasmus+ Charta študenta
    Hneď po schválení mobility dostaneš Erasmus+ Chartu. Charta sumarizuje Tvoje práva a
    povinnosti študenta a informuje Ťa, čo môžeš očakávať od prijímajúcej i vysielajúcej inštitúcie.
    Charta je rozdelená na 3 časti (pred mobilitou, počas mobility, po ukončení mobility) a pomáha
    Ti študentovi pri organizácií svojej mobility.</p>                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">

    <sipan class="subheading">Granty</sipan>
    <h2>SKUPINY KRAJÍN</h2>
<p>výška grantu študenta SR na mobilitu Erasmus+ KA103 v
    zahraničí na každý mesiac pobytu v EUR na akad. rok 2019/2020:
</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Skupina</th>
            <th>Štát</th>
            <th>Suma</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Skupina 1 – Krajiny programu
                s vyššími životnými nákladmi
            </td>
            <td>Dánsko, Fínsko, Island, Írsko, Luxembursko,
                Švédsko, Spojené kráľovstvo, Lichtenštajnsko,
                Nórsko</td>
            <td>520€</td>
        </tr>
        <tr>
            <td>Skupina 2 – Krajiny programu
                so strednými životnými
                nákladmi
            </td>
            <td>Rakúsko, Belgicko, Nemecko, Francúzsko,
                Taliansko, Grécko, Španielsko, Cyprus,
                Holandsko, Malta, Portugalsko</td>
            <td>470€</td>
        </tr>
        <tr>
            <td>Skupina 3 – Krajiny programu
                s nižšími životnými nákladmi</td>
            <td>Bulharsko, Chorvátsko, Česká republika,
                Estónsko, Litva, Lotyšsko, Maďarsko,
                Slovensko, Slovinsko, Poľsko, Rumunsko,
                Bývalá Juhoslovanská republika Macedónsko,
                Turecko, Srbsko</td>
            <td>420€</td>
        </tr>
        </tbody>
    </table>
    </div>
            </div>
        </div>
    </section>
@endsection
