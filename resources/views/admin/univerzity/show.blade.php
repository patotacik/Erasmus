@extends('layout_admin.mainlayout')

@section('content')
  <div class="container mt-3">
  <div class="row">
    <div class="col-12">

      <table class="table table-hover table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Nazov</th>
            <th scope="col" class="">zaciatok</th>
            <th scope="col" class="">koniec</th>
            <th scope="col" class="">krajinies_id</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$univerzity->id}}</th>
            <td>{{$univerzity->nazov}}</td>
            <td>{{$univerzity->zaciatok}}</td>
            <td>{{$univerzity->koniec}}</td>
            <td>{{$univerzity->krajinies_id}}</td>
            <td class="d-flex border-0 align-items-center">
              <form action="{{route('univerzity.edit',$univerzita->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2 rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('univerzity.destroy',$univerzita->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger mx-2 rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection