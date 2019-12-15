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
                            <h2 class="card-title"> Upraviť  Vyzvu:</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('vyzvi.update',$vyzva->id)}}" method="post">
                                <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="Typ">Typ</label>
                                    <input type="text" class="form-control rounded-0" id="Typ" placeholder="Typ" name="Typ" value="{{$vyzva->Typ}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="detail">detail</label>
                                    <input type="text" class="form-control rounded-0" id="detail" placeholder="detail" name="detail" value="{{$vyzva->detail}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="nazov_seminara">nazov_seminara</label>
                                    <input type="text" class="form-control rounded-0" id="nazov_seminara" placeholder="nazov_seminara" name="nazov_seminara" value="{{$vyzva->nazov_seminara}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="miesto">miesto_konania</label>
                                    <input type="text" class="form-control rounded-0" id="miesto_konania" placeholder="miesto_konania" name="miesto_konania" value="{{$vyzva->miesto_konania}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="cas_konanie">cas_konanie</label>
                                    <input type="time" class="form-control rounded-0" id="cas_konanie" placeholder="cas_konanie" name="cas_konanie" value="{{$vyzva->cas_konanie}}">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="datum_konania">datum_konania</label>
                                    <input type="date" class="form-control rounded-0" id="datum_konania" placeholder="datum_konania" name="datum_konania" value="{{$vyzva->datum_konania}}">
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
