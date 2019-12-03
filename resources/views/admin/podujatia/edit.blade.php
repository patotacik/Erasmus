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
                            <form action="{{route('events.update',$podujatie->id)}}" method="post">
                                <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="Nazov">Nazov</label>
                                    <input type="text" class="form-control rounded-0" id="Nazov" placeholder="Nazov" name="Nazov" value="{{$podujatie->Nazov}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="datum">datum</label>
                                    <input type="date" class="form-control rounded-0" id="datum" placeholder="Datum" name="datum" value="{{$podujatie->datum}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="mesto_id">mesto_id</label>
                                    <input type="number" class="form-control rounded-0" id="mesto_id" placeholder="mesto_id" name="mesto_id" value="{{$podujatie->mesto_id}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="univerzity_id">univerzity_id</label>
                                    <input type="number" class="form-control rounded-0" id="univerzity_id" placeholder="univerzity_id" name="univerzity_id" value="{{$podujatie->univerzity_id}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="krajiny_id">krajiny_id</label>
                                    <input type="number" class="form-control rounded-0" id="krajiny_id" placeholder="krajiny_id" name="krajiny_id" value="{{$podujatie->krajiny_id}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="vyzvy_id">vyzvy_id</label>
                                    <input type="number" class="form-control rounded-0" id="vyzvy_id" placeholder="vyzvy_id" name="vyzvy_id" value="{{$podujatie->vyzvy_id}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="users_id">users_id</label>
                                    <input type="number" class="form-control rounded-0" id="users_id" placeholder="users_id" name="users_id" value="{{$podujatie->users_id}}">
                                </div>
                                <div class="form-group ">
                                    <input type="hidden" value="0" class="form-control rounded-0" id="confirmed" placeholder="confirmed" name="confirmed" value="{{$podujatie->confirmed}}">
                                    <label class="text-uppercase font-weight-bold" for="confirmed">confirmed</label>
                                    <input type="checkbox"  value="1" class="form-control rounded-0" id="confirmed" placeholder="confirmed" name="confirmed" value="{{$podujatie->confirmed}}">
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
                                        save
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
