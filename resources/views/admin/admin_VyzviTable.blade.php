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
                            <h4 class="card-title">Výzvy</h4>
                            <a href="{{ url('dynamic_pdf/pdfVyzva') }}" class="btn btn-danger">Generovať report</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="">#</th>
                                        <th scope="col" class="">Typ</th>
                                        <th scope="col" class="">Detail</th>
                                        <th scope="col" class="">Názov</th>
                                        <th scope="col" class="">Miesto konania</th>
                                        <th scope="col" class="">Čas konania</th>
                                        <th scope="col" class="">Dátum konania</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($vyzvi as $vyzva)
                                        <tr class="text-center">
                                            <th scope="row">{{$vyzva->id}}</th>
                                            <td>{{$vyzva->Typ}}</td>
                                            <td>{{$vyzva->detail}}</td>
                                            <td>{{$vyzva->nazov_seminara}}</td>
                                            <td>{{$vyzva->miesto_konania}}</td>
                                            <td>{{$vyzva->cas_konanie}}</td>
                                            <td>{{$vyzva->datum_konania}}</td>
                                            <td class="d-flex align-items-center justify-content-around">
                                                <form action="{{route('vyzvi.edit',$vyzva->id)}}" method="get">
                                                    <button class="btn btn-sm btn-warning   rounded-0">
                                                        Edit
                                                    </button>
                                                </form>
                                                <form action="{{route('vyzvi.destroy',$vyzva->id)}}" method="post">
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
                            {!! $vyzvi->links() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h2 class="card-title"> Pridať novú výzvu:</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('vyzvi.store')}}" method="post">
                                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="Typ">Typ</label>
                                    <input type="text" class="form-control rounded-0" id="Typ" placeholder="Typ" name="Typ">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="detail">Detail</label>
                                    <input type="text" class="form-control rounded-0" id="detail" placeholder="Detail" name="detail">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="nazov_seminara">Názov</label>
                                    <input type="text" class="form-control rounded-0" id="nazov_seminara" placeholder="Názov" name="nazov_seminara">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="miesto_konania">Miesto</label>
                                    <input type="text" class="form-control rounded-0" id="miesto_konania" placeholder="Miesto" name="miesto_konania">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="cas_konanie">Čas</label>
                                    <input type="time" class="form-control rounded-0" id="cas_konanie" placeholder="Čas" name="cas_konanie">
                                </div>
                                <div class="form-group ">
                                    <label class="text-uppercase font-weight-bold" for="datum_konania">Dátum</label>
                                    <input type="date" class="form-control rounded-0" id="datum_konania" placeholder="Dátum" name="datum_konania">
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                                        Potvrdiť
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
