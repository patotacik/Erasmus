@extends('layout.mainlayout')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/blog_1.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            </div>
        </div>
    </div>
    </section>


    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">#1: Aké si mal pocity pred vycestovaním?</h2>
                    <p>{{$blogy_details->Otazka_1}}</p>

                    <h2 class="mb-3 mt-5">#2: Aké si mal prvotné pocity z pobytu?</h2>
                    <p>{{$blogy_details->Otazka_2}}</p>

                    <h2 class="mb-3 mt-5">#3: Aké su tvoje rady pre druhích?</h2>
                    <p>{{$blogy_details->Otazka_3}}</p>

                    <h2 class="mb-3 mt-5">#4: Napíš s akými problémami si sa stretol.</h2>
                    <p>{{$blogy_details->Otazka_4}}</p>

                    <h2 class="mb-3 mt-5">#5: Aké je tvoje celkové hodnotenie pobytu?</h2>

                    <div class="card-columns">
                        <div class="card bg-primary">
                            <div class="card-body text-center">
                                <p class="card-text"><h1 class="display-1">{{$blogy_details->hodnotenie}}/5</h1></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="property-wrap ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg);">
                            </div>
                        </div>
                    </div>


                    @foreach($komentars as $row)


                        <ul class="comment-list">

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ URL::asset('images/user.png')}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>{{$row->user_nazov->name}}</h3>
                                    <div class="meta">{{$row->created_at}}</div>
                                    <p>{{$row->koment}}</p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->
                        @endforeach

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Máš otázku ?</h3>
                            <form class="p-5 bg-light" action="{{route('komentar.pridat',$blogy_details->id)}}" method="post">
                                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                                <input type="hidden" name="hodnotenies_id" value="{{$blogy_details->id}}" />
                                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}" />
                                <div class="form-group">
                                    <label for="message">Sparáva</label>
                                    <textarea name="koment" id="koment" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Pridať komentár" class="btn py-3 px-4 btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->


            </div>
        </div>
    </section> <!-- .section -->



@endsection