@extends('layout.mainlayout')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/uvod.png');"
     data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
        </div>
    </div>
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
                    <span class="subheading">Ponuka erazmus+</span>
                    <h2 class="mb-2">Najžiadanejšie ponuky</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="#" class="img" style="background-image: url(images/work-1.jpg);"></a>
                        <div class="text">
                            <p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span>3</li>
                                <li><span class="flaticon-bathtub"></span>2</li>
                                <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                            </ul>
                            <h3><a href="#">The Blue Sky Home</a></h3>
                            <span class="location">Oakland</span>
                            <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="#" class="img" style="background-image: url(images/work-2.jpg);"></a>
                        <div class="text">
                            <p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span>3</li>
                                <li><span class="flaticon-bathtub"></span>2</li>
                                <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                            </ul>
                            <h3><a href="#">The Blue Sky Home</a></h3>
                            <span class="location">Oakland</span>
                            <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="#" class="img" style="background-image: url(images/work-3.jpg);"></a>
                        <div class="text">
                            <p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span>3</li>
                                <li><span class="flaticon-bathtub"></span>2</li>
                                <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                            </ul>
                            <h3><a href="#">The Blue Sky Home</a></h3>
                            <span class="location">Oakland</span>
                            <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                        </div>
                    </div>
                </div>
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
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>02</span></div>
                                    <h3>Vyplň dotazník</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>03</span></div>
                                    <h3>Zúčasní sa pohovoru</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>04</span></div>
                                    <h3>A môžeš cestovať</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
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
                        <h2 class="mb-4">We Put People First.</h2>

                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
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
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection