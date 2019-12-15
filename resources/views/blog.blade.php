@extends('layout.mainlayout')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image:url({{ URL::asset('images/blog_1.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @foreach($blog as $row)

                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <a href='{{route('blogy.details',$row->id)}}' class="block-20 img" style="background-image: url('images/image_3.jpg')"> </a>
                            <h3 class="heading"></h3>
                            <div class="meta mb-3">
                                <div><a>{{$row->created_at}}</a></div>
                                <div><a>{{$row->user_nazov->name}}</a></div>
                              <div><a>Počet zobrazení: {{$row->pocitadlo}} <span class="fa fa-eye"> </span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li class=""><span>{!! $blog->links() !!}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection