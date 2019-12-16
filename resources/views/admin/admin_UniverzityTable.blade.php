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
                            <h4 class="card-title">Univerzity</h4>
                            <a href="{{ url('dynamic_pdf/pdfUni') }}" class="btn btn-danger">Generovať report</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="">#</th>
                                        <th scope="col" class="">Názov</th>
                                        <th scope="col" class="">Začiatok spolupráce</th>
                                        <th scope="col" class="">Koniec spolupráce</th>
                                        <th scope="col" class="">Mesto</th>
                                        <th scope="col" class="">Krajina</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($univerzity as $univerzita)
                                        <tr class="text-center">
                                            <th scope="row">{{$univerzita->id}}</th>
                                            <td>{{$univerzita->nazov}}</td>
                                            <td>{{$univerzita->zaciatok}}</td>
                                            <td>{{$univerzita->koniec}}</td>
                                            <td>{{$univerzita->podMes->name}}</td>
                                            <td>{{$univerzita->podKraj->name}}</td>
                                            <td class="d-flex align-items-center justify-content-around">
                                                <form action="{{route('univerzity.edit',$univerzita->id)}}" method="get">
                                                    <button class="btn btn-sm btn-warning   rounded-0">
                                                        Edit
                                                    </button>
                                                </form>
                                                <form action="{{route('univerzity.destroy',$univerzita->id)}}" method="post">
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
                            {!! $univerzity->links() !!}
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h2 class="card-title"> Pridať novú univerzitu:</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('univerzity.store')}}" method="post">
                                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="nazov">Názov</label>
                                    <input type="text" class="form-control rounded-0" id="nazov" placeholder="Názov" name="nazov">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="zaciatok">Začiatok spolupráce</label>
                                    <input type="date" class="form-control rounded-0" id="zaciatok" placeholder="Začiatok spolupráce" name="zaciatok">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="koniec">Koniec spolupráce</label>
                                    <input type="date" class="form-control rounded-0" id="koniec" placeholder="Koniec spolupráce" name="koniec">
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