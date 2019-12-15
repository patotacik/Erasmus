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
                                    <label class="text-uppercase font-weight-bold" for="Nazov">Nazov</label>
                                    <input type="text" class="form-control rounded-0" id="Nazov" placeholder="Nazov" name="Nazov" value="{{$univerzity->Nazov}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="zaciatok">zaciatok</label>
                                    <input type="date" class="form-control rounded-0" id="zaciatok" placeholder="zaciatok" name="zaciatok" value="{{$univerzity->zaciatok}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="koniec">koniec</label>
                                    <input type="date" class="form-control rounded-0" id="koniec" placeholder="koniec" name="koniec" value="{{$univerzity->koniec}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="krajinies_id">krajinies_id</label>
                                    <input type="number" class="form-control rounded-0" id="krajinies_id" placeholder="krajinies_id" name="krajinies_id" value="{{$univerzity->krajinies_id}}">
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
