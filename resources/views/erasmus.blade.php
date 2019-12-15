@extends('layout.mainlayout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/uvod.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>

    {{-- search --}}
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="{{ route('erasmus.search') }}" class="search-property-1" method="get">
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
                        <form action="{{ route('erasmus.filter') }}" class="search-property-1" method="get">
                            <div class="row">

                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Krajina</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="k" class="form-control">
                                                    @foreach($podujatia as $row)

                                                        <option value="{{$row->podKraj->name}}">{{$row->podKraj->name}}</option>
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
                                                    @foreach($podujatia as $row)
                                                        <option value="{{$row->podMes->name}}">{{$row->podMes->name}}</option>
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
                                                    @foreach($podujatia as $row)
                                                        <option value="{{$row->podUni->nazov}}">{{$row->podUni->nazov}}</option>
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

    {{-- zobrazenie všetkého --}}
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
                                <img src="{{$row->Obrazok}}" class="img d-flex align-items-center justify-content-center">
                            <div class="text">
                                <h3>{{$row->Nazov}}</h3>
                                <h3>Mesto: {{$row->podMes->name}}</h3>
                                <h3>Univerzita: {{$row->podUni->nazov}}</h3>
                                <h3 class="location">Krajina: {{$row->podKraj->name}}</h3>
                                <h3 class="date">Dátum: {{$row->datum}}</h3>
                                <h3 class="date">Popis: {{str_limit($row->popis, 40)}}</h3>
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
