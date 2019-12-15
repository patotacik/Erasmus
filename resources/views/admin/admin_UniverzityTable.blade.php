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
                            <h4 class="card-title">Tabulka Univerzit</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="">#</th>
                                        <th scope="col" class="">Nazov</th>
                                        <th scope="col" class="">zaciatok</th>
                                        <th scope="col" class="">koniec</th>
                                        <th scope="col" class="">krajinies_id</th>
                                        <th scope="col" class="">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($univerzity as $univerzita)
                                        <tr class="text-center">
                                            <th scope="row">{{$univerzita->id}}</th>
                                            <td>{{$univerzita->nazov}}</td>
                                            <td>{{$univerzita->zaciatok}}</td>
                                            <td>{{$univerzita->koniec}}</td>
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
                            <h2 class="card-title"> Pridať novu univerzitu:</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('univerzity.store')}}" method="post">
                                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="Nazov">Nazov</label>
                                    <input type="text" class="form-control rounded-0" id="Nazov" placeholder="Nazov" name="Nazov">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="zaciatok">zaciatok</label>
                                    <input type="date" class="form-control rounded-0" id="zaciatok" placeholder="zaciatok" name="zaciatok">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="koniec">koniec</label>
                                    <input type="date" class="form-control rounded-0" id="koniec" placeholder="koniec" name="koniec">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="krajinies_id">krajinies_id</label>
                                    <input type="number" class="form-control rounded-0" id="krajinies_id" placeholder="krajinies_id" name="krajinies_id">
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                                        confirm
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