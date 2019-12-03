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
                                    <label class="text-uppercase font-weight-bold" for="konec">konec</label>
                                    <input type="date" class="form-control rounded-0" id="konec" placeholder="konec" name="konec" value="{{$univerzity->konec}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="krajiny_id">krajiny_id</label>
                                    <input type="number" class="form-control rounded-0" id="krajiny_id" placeholder="krajiny_id" name="krajiny_id" value="{{$univerzity->krajiny_id}}">
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
