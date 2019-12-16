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
                            <h2 class="card-title"> Upraviť  Univerzitu:</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('univerzity.update',$univerzity->id)}}" method="post">
                                <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="nazov">Názov</label>
                                    <input type="text" class="form-control rounded-0" id="nazov" placeholder="Názov" name="nazov" value="{{$univerzity->nazov}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="zaciatok">Začiatok spolupráce</label>
                                    <input type="date" class="form-control rounded-0" id="zaciatok" placeholder="Začiatok spolupráce" name="zaciatok" value="{{$univerzity->zaciatok}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="koniec">Koniec spolupráce</label>
                                    <input type="date" class="form-control rounded-0" id="koniec" placeholder="Koniec spolupráce" name="koniec" value="{{$univerzity->koniec}}">
                                </div>
                                <div class="form-field">
                                    <label class="text-uppercase font-weight-bold" for="mestos_id">Mesto</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="mestos_id" class="form-control">

                                            <option value=" "> </option>
                                            @foreach($Euni as $row)
                                                <option value="{{$row->mestos_id}}">{{$row->podMes->name}}</option>
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
                                            @foreach($Euni as $row)
                                                <option value="{{$row->krajinies_id}}">{{$row->podKraj->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
