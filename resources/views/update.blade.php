@extends('layout_admin.mainlayout')
@section('content')
<form method="post" action="{{ action('AdminController@updateAction', ['id'=> $user->id])}}">
    Meno:<br>
    <input type="text" name="name" value="{{$user->name}}">
    <br>
    Email:<br>
    <input type="text" name="email" value="{{$user->email}}">
    <br>
    Heslo:<br>
    <input type="text" name="password" value="{{$user->password}}">
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Upravit">
</form>
@endsection