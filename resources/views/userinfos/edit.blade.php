@extends('adminlte::page')

@section('title', 'Userinfo')

@section('content_header')
    <h1>User Information</h1>
@stop

@section('content')
<form method="post" action="{{ route('userinfos.update', ['userinfo'=>$userinfo->id]) }}" >
    @csrf
    @method('PUT')
    <x-adminlte-input name="user_name" value="{{ $userinfo->user_name }}" label="Name" />
    <x-adminlte-input name="user_email" value="{{ $userinfo->user_email }}" label="Email" />
    <x-adminlte-input name="phone_number" value="{{ $userinfo->phone_number }}" type="number" min=0 max=9999999999 label="Phone Number" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop