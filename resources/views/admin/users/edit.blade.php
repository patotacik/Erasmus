@extends('layout_admin.mainlayout')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Úprava užívateľa</h4>
                    </div>

                        <form action="{{route('users.update',$user->id)}}" method="post">
                            <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
                            <div class="form-group ">
                                <label class="text-uppercase font-weight-bold" for="name">name</label>
                                <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group ">
                                <label class="text-uppercase font-weight-bold" for="email">email</label>
                                <input type="text" class="form-control rounded-0" id="email" placeholder="email" name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group ">
                                <label class="text-uppercase font-weight-bold" for="roly_id">roly_id</label>
                                <input type="number" class="form-control rounded-0" id="roly_id" placeholder="roly_id" name="roly_id" value="{{$user->roly_id}}">
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
