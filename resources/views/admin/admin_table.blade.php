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
                            <h4 class="card-title"> Simple Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="">#</th>
                                        <th scope="col" class="">Name</th>
                                        <th scope="col" class="">Email</th>
                                        <th scope="col" class="">Roly_id</th>
                                        <th scope="col" class="">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr class="text-center">
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->roly_id}}</td>

                                            <td class="d-flex align-items-center justify-content-around">
                                                <form action="{{route('users.edit',$user->id)}}" method="get">
                                                    <button class="btn btn-sm btn-warning   rounded-0">
                                                        Edit
                                                    </button>
                                                </form>
                                                <form action="{{route('users.destroy',$user->id)}}" method="post">
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
                            {!! $users->links() !!}
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h2 class="card-title"> Pridať nového uživatela:</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('users.store')}}" method="post">
                                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="name">name</label>
                                    <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="email">email</label>
                                    <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="password">password</label>
                                    <input type="password" class="form-control rounded-0" id="password" placeholder="Password" name="password">
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