@extends('adminlte::page')

@section('title', 'Userinfo')

@section('content_header')
  <h1>Contact Information</h1>
@stop

@section('content')
  <h2>User Name: {{ $userinfo->user_name; }}</h2>
  <hr>
  <div>
    <p>Email: {{ $userinfo->user_email; }}</p>
    <p>Phone Number: {{ $userinfo->phone_number; }}</p>
  </div>

  <form style="margin: 0; padding: 0">
    <a class="btn btn-default" href="{{ route('userinfos.edit', ['userinfo'=>$userinfo->id]) }}">Edit</a>
  </form>  
@stop