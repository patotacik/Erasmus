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
                <h2 class="card-title"> Upraviť  uživatela:</h2>
            </div>
            <div class="card-body">
                        <form action="{{route('users.update',$user->id)}}" method="post">
                            <input type="hidden" name="_method" value="put" /> {{csrf_field()}}


                            <div class="form-group ">
                                <label class="text-uppercase font-weight-bold" for="name">Meno Priezvisko</label>
                                <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group ">
                                <label class="text-uppercase font-weight-bold" for="email">Email</label>
                                <input type="text" class="form-control rounded-0" id="email" placeholder="email" name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Typ uživateľa</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="roly_id" id="roly_id" value="1" value="{{$user->roly_id}}">
                                            <label class="form-check-label" for="roly_id">
                                                Účasník
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="roly_id" id="roly_id" value="2" value="{{$user->roly_id}}">
                                            <label class="form-check-label" for="roly_id">
                                                Referent                                                </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="roly_id" id="roly_id" value="3" value="{{$user->roly_id}}">
                                            <label class="form-check-label" for="roly_id" >
                                                Admin                                                </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
                                    Uložiť
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
