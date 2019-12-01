@extends('layout.mainlayout')

@section('content')
<div class="page-content">
    <div class="wizard-heading">SPÄTNÝ DOTAZNIK {{ Auth::user()->name }}</div>
    <div class="wizard-v7-content">
        <div class="wizard-form">
            <form class="form-register" action="{{route('formular.pridat')}}" method="post">
                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                <div id="form-total">
                    <!-- SECTION 1 -->
                    <h2>
                        <p class="step-icon"><span>1</span></p>
                        <div class="step-text">
                            <span class="step-inner-1">Prvá otázka</span>
                        </div>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Aké si mal pocity pred vycestovaním?</h3>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="Otazka_1" rows="3"></textarea>

                            </div>

                        </div>
                    </section>
                    <!-- SECTION 2 -->
                    <h2>
                        <p class="step-icon"><span>2</span></p>
                        <div class="step-text">
                            <span class="step-inner-1">Druhá otázka</span>
                        </div>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Aké si mal prvotné pocity z pobytu ?</h3>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="Otazka_2"rows="3"></textarea>
                            </div>

                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2>
                        <p class="step-icon"><span>3</span></p>
                        <div class="step-text">
                            <span class="step-inner-1">Tretia otázka</span>
                        </div>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Aké su tvoje rady pre druhích?</h3>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Otazka_3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <h2>
                        <p class="step-icon"><span>4</span></p>
                        <div class="step-text">
                            <span class="step-inner-1">Štvrtá otázka </span>
                        </div>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Napíš s akými problémami si sa stretol.</h3>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="Otazka_4" rows="3"></textarea>
                            </div>
                        </div>
                    </section>


                    <h2>
                        <p class="step-icon"><span>5</span></p>
                        <div class="step-text">
                            <span class="step-inner-1">Piata otázka</span>
                        </div>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Aké je tvoje celkové hodnotenie pobytu?</h3>
                            </div>
                            <div class="form-row">
                                <fieldset id='demo1' class="rating">
                                    <input class="stars" type="radio" id="star5" name="hodnotenie" value="5" />
                                    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                    <input class="stars" type="radio" id="star4" name="hodnotenie" value="4" />
                                    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input class="stars" type="radio" id="star3" name="hodnotenie" value="3" />
                                    <label class = "full" for="star3" title="Meh - 3 stars"></label>
                                    <input class="stars" type="radio" id="star2" name="hodnotenie" value="2" />
                                    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input class="stars" type="radio" id="star1" name="hodnotenie" value="1" />
                                    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                </fieldset>
                                </div>
                            <input type="hidden" name="users_id" value="{{$details->users_id}}" />
                            <input type="hidden" name="podujatia_id" value="{{$details->id}}" />

                        </div>
                    </section>
                    <h2>
                        <p class="step-icon"><span>6</span></p>
                        <div class="step-text">
                            <span class="step-inner-1">Súborobi</span>
                        </div>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Agreement</h3>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <div class="content-inner">
                                        <p>Massa placerat duis ultricies lacus sed turpis tin Elementum sagittis vitae et leo duis ut diam quam nulla. Viverra mauris in aliquam sem fringilla ut. Id leo in vitae turpis massa sed elementum tempus. Aliquet enim tortor at auctor urna nunc id cursus. Nulla aliquet enim tortor at auctor .Consquat nisl vel pretium lectus quam id leo.</p>
                                        <div class="form-checkbox">
                                            <label class="container">
                                                <p>I read agreement and i have not any objection.</p>
                                                <input type="checkbox" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" name="potvrdenie">Zverejniť môj dotazník
                            </label>
                        </div>

                    </section>
                </div>
                <div class="form-group ">
                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                        Odoslať
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
