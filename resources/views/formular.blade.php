@extends('layout_formular.mainlayout')

@section('content')



    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="{{route('formular.pridat')}}" method="post">
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
                    <span class="focus-input100"></span>
                </div>
                <input type="hidden" name="users_id" value="{{$details->users_id}}" />
                <input type="hidden" name="podujatia_id" value="{{$details->id}}" />


                <div class="wrap-input100 input100-select">
                    <div class="form-check-inline">
                        <label class="label-input100">
                            <input type="radio" class="form-check-input" value="1" name="potvrdenie">Zverejniť môj dotazník
                        </label>
                    </div>
                </div>

                <div class="wrap-input100 input100-select">
                    <span class="label-input100">Budget</span>
                    <div>
                        <select class="selection-2" name="budget">
                            <option>Select Budget</option>
                            <option>1500 $</option>
                            <option>2000 $</option>
                            <option>2500 $</option>
                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <div class="input-group control-group increment" >
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                    </div>
                    <div class="clone hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                    <span class="focus-input100"></span>
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
