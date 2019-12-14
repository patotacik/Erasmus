@extends('layout.mainlayout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/uvod.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="{{ route('erasmus.search') }}" method="get">
                            <input type="text" name="q" class="form-control" placeholder="hladanie">
                            <button type="submit" class="form btn btn-primary">Hľadaj</button>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="#" class="search-property-1">
                            <div class="row">

                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Krajina</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" class="form-control">
                                                    @foreach($podujatia as $row)

                                                        <option value="">{{$row->podKraj->name}}</option>
                                                    @endforeach>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Mesto</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    @foreach($podujatia as $row)
                                                        <option value="">{{$row->podMes->name}}</option>
                                                    @endforeach>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Univerzita</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name=""class="form-control">
                                                    @foreach($podujatia as $row)
                                                        <option value="">{{$row->podUni->nazov}}</option>
                                                    @endforeach>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search Property" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">erasmus+</span>
                    <h2 class="mb-2">Aktuálna ponuka</h2>
                </div>
            </div>
            <div class="row">
                @foreach($podujatia as $row)
                    <div class="col-md-4">
                        <div class="property-wrap ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
                                <a href='{{route('erasmus.details',$row->id)}}' method="post" class="icon d-flex align-items-center justify-content-center btn-custom">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </div>
                            <div class="text">
                                <h3>{{$row->Nazov}}</h3>
                                <h3>Mesto: {{$row->podMes->name}}</h3>
                                <h3>Univerzita: {{$row->podUni->nazov}}</h3>
                                <h3 class="location">Krajina: {{$row->podKraj->name}}</h3>
                                <h3 class="date">Dátum: {{$row->datum}}</h3>
                                <a href='{{route('erasmus.details',$row->id)}}' method="post" class="d-flex align-items-center justify-content-center btn-custom">
                                    <span class="fa fa-eye"></span></a>
                                <h3 class="display-2">{{$row->pocitadlo}} <span class="fa fa-eye"> </span></h3></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li class=""><span>{!! $podujatia->links() !!}</span></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
         </section>
@endsection
