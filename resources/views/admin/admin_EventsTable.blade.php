@extends('layout_admin.mainlayout')

@section('content')
    <div class="main-panel" id="main-panel">

        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Podujatia</h4>
                            <a href="{{ url('dynamic_pdf/pdfEvent') }}" class="btn btn-danger">Generovať report</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="">#</th>
                                        <th scope="col" class="">Názov</th>
                                        <th scope="col" class="">Dátum</th>
                                        <th scope="col" class="">Mesto</th>
                                        <th scope="col" class="">Univerzita</th>
                                        <th scope="col" class="">Krajina</th>
                                        <th scope="col" class="">Uživatel</th>
                                        <th scope="col" class="">Potvrdene</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($podujatia as $podujatie)
                                        <tr class="text-center">
                                            <th scope="row">{{$podujatie->id}}</th>
                                            <td>{{$podujatie->Nazov}}</td>
                                            <td>{{$podujatie->datum}}</td>
                                            <td>{{$podujatie->podMes->name}}</td>
                                            <td>{{$podujatie->podUni->nazov}}</td>
                                            <td>{{$podujatie->podKraj->name}}</td>
                                            <td>{{$podujatie->podUser->name}}</td>
                                            <td>{{$podujatie->confirmed}}</td>
                                            <td class="d-flex align-items-center justify-content-around">
                                                <form action="{{route('events.edit',$podujatie->id)}}" method="get">
                                                    <button class="btn btn-sm btn-warning   rounded-0">
                                                        Edit
                                                    </button>
                                                </form>
                                                <form action="{{route('events.destroy',$podujatie->id)}}" method="post">
                                                    <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                                                    <button class="btn btn-sm btn-danger   rounded-0">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {!! $podujatia->links() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h2 class="card-title"> Pridať nové podujatie:</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('events.store')}}" method="post">
                                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="Nazov">Názov</label>
                                    <input type="text" class="form-control rounded-0" id="Nazov" placeholder="Názov" name="Nazov">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="datum">Dátum</label>
                                    <input type="date" class="form-control rounded-0" id="datum" placeholder="Dátum" name="datum">
                                </div>

                                <div class="form-field">
                                    <label class="text-uppercase font-weight-bold" for="mestos_id">Mesto</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="mestos_id" class="form-control">

                                            <option value=" "> </option>
                                            @foreach($Epod as $row)
                                                <option value="{{$row->mestos_id}}">{{$row->podMes->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="univerzities_id">Univerzita</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="univerzities_id" class="form-control">
                                            <option value=" "> </option>
                                            @foreach($Epod as $row)
                                                <option value="{{$row->univerzities_id}}">{{$row->podUni->nazov}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="krajinies_id">Krajina</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="krajinies_id" class="form-control">
                                            <option value=" "> </option>
                                            @foreach($Epod as $row)
                                                <option value="{{$row->krajinies_id}}">{{$row->podKraj->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="users_id">Uživatel</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="users_id" class="form-control">
                                            <option value=" "> </option>
                                            @foreach($Epod as $row)
                                                <option value="{{$row->users_id}}">{{$row->podUser->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="popis">Popis</label>
                                    <input type="text" class="form-control rounded-0" id="popis" placeholder="Popis" name="popis">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="Obrazok">Obrázok</label>
                                    <input type="text" class="form-control rounded-0" id="Obrazok" placeholder="Obrázok" name="Obrazok">
                                </div>
                                <div class="form-group ">
                                    <input type="hidden" value="0" id="confirmed" placeholder="confirmed" name="confirmed">
                                    <label class="text-uppercase font-weight-bold" for="confirmed">Potvrdené</label>
                                    <input type="checkbox"  value="1" id="confirmed" placeholder="confirmed" name="confirmed">
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                                        Potvrdiť
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
