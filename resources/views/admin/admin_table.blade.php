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
                                <table class="table">
                                    <thead class=" text-primary">
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                <a href="{{ action("AdminController@ShowAction", ['id' => $user->id]) }}">editovat</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h2 class="card-title"> Pridať nového uživatela:</h2>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ action('AdminController@insertAction')}}">
                                <div class="form-group">
                                Meno:<br>
                                <input type="text" class="form-control" name="name" value="Meno Priezvisko">
                                </div>
                                <br>
                                <div class="form-group">
                                Email:<br>
                                <input type="text"class="form-control" name="email" value="example@example.com">
                                <br>
                                </div>
                                    <div class="form-group">
                                    Heslo:<br>
                                <input type="text"class="form-control" name="password" value="password">
                                <br>
                                    </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-primary">Pridať</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection