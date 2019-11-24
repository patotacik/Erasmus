@extends('layout.mainlayout')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/uvod.png');"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 style="font-size:5vw;"><br><br>Ponuka pobytov v zahraničí</h1>
                </div>
            </div>
        </div>
    </div>
        </section>

        <section class="ftco-section">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="property-wrap ftco-animate">
                            <a href="details" class="img" style="background-image: url(images/work-1.jpg);"></a>
                            <div class="text">
                                <thead>

                                <tr>

                                    <th>nazov</th>
                                    <th>datum</th>
                                    <th>miesto</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($podujatias as $podujatias)
                                    <tr>
                                        <td>{{$podujatias->nazov}}</td>
                                        <td>{{$podujatias->datum}}</td>
                                        <td>{{$podujatias->miesto}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </div>
                        </div>
                    </div>

                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection