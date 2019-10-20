@extends('layout.mainlayout')

@section('content')

    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/uvod.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Prihlásiť sa</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">

            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h2 class="text-center">Vyplňte prosím požadované údaje</h2>
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Prihlasovacie meno / číslo">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Heslo">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Prihlásiť sa" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>

@endsection