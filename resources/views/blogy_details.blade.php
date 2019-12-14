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
                    <h2 class="mb-3">Aké si mal pocity pred vycestovaním?</h2>
                    <p>{{$blogy_details->Otazka_1}}</p>

                    <h2 class="mb-3 mt-5">Aké si mal prvotné pocity z pobytu?</h2>
                    <p>{{$blogy_details->Otazka_2}}</p>

                    <h2 class="mb-3 mt-5">Aké su tvoje rady pre druhích?</h2>
                    <p>{{$blogy_details->Otazka_3}}</p>

                    <h2 class="mb-3 mt-5">Napíš s akými problémami si sa stretol.</h2>
                    <p>{{$blogy_details->Otazka_4}}</p>

                    <h2 class="mb-3 mt-5">Aké je tvoje celkové hodnotenie pobytu?</h2>
                    <p>{{$blogy_details->Otazka_5}}</p>



                    <div class="col-md-3">
                        <div class="property-wrap ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
                            </div>
                        </div>
                    </div>



                    <div class="pt-5 mt-5">
                        <ul class="comment-list">

                            <li class="comment">

                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">October 17, 2019 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="p-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->


            </div>
        </div>
    </section> <!-- .section -->



@endsection