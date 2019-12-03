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
            <th scope="col" class="">datum</th>
            <th scope="col" class="">mesto_id</th>
            <th scope="col" class="">univerzity_id</th>
            <th scope="col" class="">krajiny_id</th>
            <th scope="col" class="">vyzvy_id</th>
            <th scope="col" class="">users_id</th>
            <th scope="col" class="">confirmed</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$podujatie->id}}</th>
            <td>{{$podujatie->Nazov}}</td>
            <td>{{$podujatie->datum}}</td>
            <td>{{$podujatie->mesto_id}}</td>
            <td>{{$podujatie->univerzity_id}}</td>
            <td>{{$podujatie->krajiny_id}}</td>
            <td>{{$podujatie->vyzvy_id}}</td>
            <td>{{$podujatie->users_id}}</td>
            <td>{{$podujatie->confirmed}}</td>
            <td class="d-flex border-0 align-items-center">
              <form action="{{route('events.edit',$podujatie->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2 rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('events.destroy',$podujatie->id)}}" method="post">
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