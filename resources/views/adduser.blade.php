<?php
?>

<form method="post" action="{{ action('AdminController@insertAction')}}">
    Meno:<br>
    <input type="text" name="name" value="Admin Adminovsky">
    <br>
    Email:<br>
    <input type="text" name="Email" value="example@example.com">
    <br>
    Heslo:<br>
    <input type="text" name="password" value="password">
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Odoslat">
</form>