@extends('layout.mainlayout')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/semin.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
        <div class="overlay"></div>
        <div class="container">

        </div>
    </div>

    {{-- search --}}
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="{{ route('seminar.search') }}" class="search-property-1" method="get">
                            <div class="row">

                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label>Hľadanie</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <input type="text" name="q" class="form-control" placeholder="zadajte kľúčové slovo">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Hľadaj" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>

        {{-- filter --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="{{ route('seminar.filter') }}" class="search-property-1" method="get">
                            <div class="row">

                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Krajina</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="k" class="form-control">
                                                    <option value=" "> </option>
                                                    @foreach($seminare as $row)
                                                        <option value="{{$row->typ}}">{{$row->typ}}</option>
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
                                                <select name="m" class="form-control">
                                                    <option value=" "> </option>
                                                    @foreach($seminare as $row)
                                                        <option value="{{$row->nazov_seminara}}">{{$row->nazov_seminara}}</option>
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
                                                <select name="u" class="form-control">
                                                    <option value=" "> </option>
                                                    @foreach($seminare as $row)
                                                        <option value="{{$row->miesto_seminara}}">{{$row->miesto_seminara}}</option>
                                                    @endforeach>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Filter" class="btn btn-primary">
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
                        @foreach($seminar as $row)
                        <div class="col-md-4">
                                <div class="property-wrap ftco-animate">

                                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sem.jpg);">

                                        <a href='{{route('seminar.details',$row->id)}}' method="post" class="icon d-flex align-items-center justify-content-center btn-custom">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                    </div>
                                    <div class="row">

                                    <div class="text">
                                        <h3>{{$row->Typ}} - {{$row->nazov_seminara}}</h3>
                                        <h3>Dátum konania: {{$row->datum_konania}} </h3>
                                        <h3>Čas konania: {{$row->cas_konanie}}</h3>
                                        <h3 class="location">Miesto konania: {{$row->miesto_konania}} </h3>
                                    </div>

                                </div>
                            </div>
                    </div>
                        @endforeach

    </div>
    </div>
    </section>
@endsection