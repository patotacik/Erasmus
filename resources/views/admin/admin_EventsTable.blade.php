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
                            <h4 class="card-title">Tabulka Podujati</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="">#</th>
                                        <th scope="col" class="">Nazov</th>
                                        <th scope="col" class="">datum</th>
<<<<<<< HEAD
                                        <th scope="col" class="">Miesto</th>
=======
                                        <th scope="col" class="">mesto_id</th>
                                        <th scope="col" class="">univerzity_id</th>
                                        <th scope="col" class="">krajiny_id</th>
                                        <th scope="col" class="">vyzvy_id</th>
                                        <th scope="col" class="">users_id</th>
                                        <th scope="col" class="">confirmed</th>
>>>>>>> origin/master
                                        <th scope="col" class="">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($podujatia as $podujatie)
                                        <tr class="text-center">
                                            <th scope="row">{{$podujatie->id}}</th>
                                            <td>{{$podujatie->Nazov}}</td>
                                            <td>{{$podujatie->datum}}</td>
<<<<<<< HEAD
                                            <td>{{$podujatie->Miesto}}</td>
                                            <td>{{$podujatie->vyzvy_id}}</td>
                                            <td>{{$podujatie->users_id}}</td>
=======
                                            <td>{{$podujatie->mesto_id}}</td>
                                            <td>{{$podujatie->univerzity_id}}</td>
                                            <td>{{$podujatie->krajiny_id}}</td>
                                            <td>{{$podujatie->vyzvy_id}}</td>
                                            <td>{{$podujatie->users_id}}</td>
                                            <td>{{$podujatie->confirmed}}</td>
>>>>>>> origin/master

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
                                    <label class="text-uppercase font-weight-bold" for="Nazov">Nazov</label>
                                    <input type="text" class="form-control rounded-0" id="Nazov" placeholder="Nazov" name="Nazov">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="datum">datum</label>
                                    <input type="date" class="form-control rounded-0" id="datum" placeholder="Datum" name="datum">
                                </div>
                                <div class="form-group ">
<<<<<<< HEAD
                                    <label class="text-uppercase font-weight-bold" for="Miesto">Miesto</label>
                                    <input type="text" class="form-control rounded-0" id="Miesto" placeholder="Miesto" name="Miesto">
=======
                                    <label class="text-uppercase font-weight-bold" for="mesto_id">mesto_id</label>
                                    <input type="number" class="form-control rounded-0" id="mesto_id" placeholder="mesto_id" name="mesto_id">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="univerzity_id">univerzity_id</label>
                                    <input type="number" class="form-control rounded-0" id="univerzity_id" placeholder="univerzity_id" name="univerzity_id">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="krajiny_id">krajiny_id</label>
                                    <input type="number" class="form-control rounded-0" id="krajiny_id" placeholder="krajiny_id" name="krajiny_id">
>>>>>>> origin/master
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="vyzvy_id">vyzvy_id</label>
                                    <input type="number" class="form-control rounded-0" id="vyzvy_id" placeholder="vyzvy_id" name="vyzvy_id">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="users_id">users_id</label>
                                    <input type="number" class="form-control rounded-0" id="users_id" placeholder="users_id" name="users_id">
                                </div>
                                <div class="form-group ">
<<<<<<< HEAD
=======
                                    <input type="hidden" value="0" class="form-control rounded-0" id="confirmed" placeholder="confirmed" name="confirmed">
                                    <label class="text-uppercase font-weight-bold" for="confirmed">confirmed</label>
                                    <input type="checkbox"  value="1" class="form-control rounded-0" id="confirmed" placeholder="confirmed" name="confirmed">
                                </div>
                                <div class="form-group ">
>>>>>>> origin/master
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