@extends('layouts.app')
@section('content')
    <form action="/register" method="POST">
        <label for="firstname">Email:</label>
        <input type="text" id="firstname" name="firstname" value="Mickey">
        <br>
        <label for="lastname">Password:</label>
        <input type="text" id="lastname" name="lastname" value="Mouse">
        <br><br>
        <input type="submit" value="Submit">
    </form>
@endsection