@extends('layout_formular.mainlayout')

@section('content')



    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="{{route('formular.pridat')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}

                <span class="contact100-form-title">
Ahoj {{ Auth::user()->name }} odpovedz nám na pár otázok:</span>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Aké si mal pocity pred vycestovaním?</span>
                    <textarea class="input100" name="Otazka_1" placeholder="Tvoja odpoveď..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Aké si mal prvotné pocity z pobytu?</span>
                    <textarea class="input100" name="Otazka_2" placeholder="Tvoja odpoveď..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Aké su tvoje rady pre druhích?</span>
                    <textarea class="input100" name="Otazka_3" placeholder="Tvoja odpoveď..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Napíš s akými problémami si sa stretol.</span>
                    <textarea class="input100" name="Otazka_4" placeholder="Tvoja odpoveď..."></textarea>
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Uploadni nám fotku :)(nepovinné)</span>
                    <input type="file" class="form-control" name="obrazok" placeholder="vyber obrázok" multiple>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Uploadni nám fotku :) (nepovinné)</span>
                    <input type="file" class="form-control" name="obrazok2" placeholder="vyber obrázok" multiple>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Uploadni nám fotku :)(nepovinné)</span>
                    <input type="file" class="form-control" name="obrazok3" placeholder="vyber obrázok" multiple>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Uploadni prezentáciu :)(nepovinné)</span>
                    <input type="file" class="form-control" name="ppt" placeholder="vyber obrázok" multiple>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Uploadni dokument :)(nepovinné)</span>
                    <input type="file" class="form-control" name="dokument" placeholder="vyber obrázok" multiple>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Aké je tvoje celkové hodnotenie pobytu?</span>
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
                </div>


                <input type="hidden" name="users_id" value="{{$details->users_id}}" />
                <input type="hidden" name="podujatias_id" value="{{$details->id}}" />
                <input type="hidden" name="pocitadlo" value="0" />


                <div class="wrap-input100 input100-select">
                    <div class="form-check-inline">
                        <label class="label-input100">
                            <input type="radio" class="form-check-input" value="1" name="potvrdenie">Zverejniť môj dotazník
                        </label>
                    </div>
                </div>



                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
							<span>
								Odovzdať
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div id="dropDownSelect1"></div>


@endsection
