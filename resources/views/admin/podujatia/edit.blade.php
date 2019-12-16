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
                            <h2 class="card-title"> Upraviť  Podujatie:</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('events.update',$podujatie->id)}}" method="post">
                                <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="Nazov">Názov</label>
                                    <input type="text" class="form-control rounded-0" id="Nazov" placeholder="Názov" name="Nazov" value="{{$podujatie->Nazov}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="datum">Dátum</label>
                                    <input type="date" class="form-control rounded-0" id="datum" placeholder="Dátum" name="datum" value="{{$podujatie->datum}}">
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
                                    <label class="text-uppercase font-weight-bold" for="users_id">Uživateľ</label>
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
                                    <input type="text" class="form-control rounded-0" id="popis" placeholder="Popis" name="popis" value="{{$podujatie->popis}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="Obrazok">Obrazok</label>
                                    <input type="text" class="form-control rounded-0" id="Obrazok" placeholder="Obrazok" name="Obrazok" value="{{$podujatie->Obrazok}}">
                                </div>
                                <div class="form-group ">
                                    <input type="hidden" value="0" id="confirmed" placeholder="confirmed" name="confirmed">
                                    <label class="text-uppercase font-weight-bold" for="confirmed">Potvrdene</label>
                                    <input type="checkbox"  value="1" id="confirmed" placeholder="confirmed" name="confirmed">
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
                                        Uložit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
