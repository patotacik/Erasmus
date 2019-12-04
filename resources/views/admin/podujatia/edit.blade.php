@extends('layout_admin.mainlayout')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Úprava podujatia</h4>
                    </div>

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
                                <label class="text-uppercase font-weight-bold" for="Miesto">Miesto</label>
                                <input type="text" class="form-control rounded-0" id="Miesto" placeholder="Miesto" name="Miesto" value="{{$podujatie->Miesto}}">
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
@endsection
