@extends('layout.master') 
@section('content') @component('layout.components.title') create page @endcomponent
<div class="container mt-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <form action="{{route('univerzity.store')}}" method="post">
        <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="Nazov">Nazov</label>
          <input type="text" class="form-control rounded-0" id="Nazov" placeholder="Nazov" name="Nazov">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="zaciatok">zaciatok</label>
          <input type="date" class="form-control rounded-0" id="zaciatok" placeholder="zaciatok" name="zaciatok">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="konec">konec</label>
          <input type="date" class="form-control rounded-0" id="konec" placeholder="konec" name="konec">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="krajiny_id">krajiny_id</label>
          <input type="number" class="form-control rounded-0" id="krajiny_id" placeholder="krajiny_id" name="krajiny_id">
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
@endsection
