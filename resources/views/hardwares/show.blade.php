@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h3>Hardware Information</h3>
@stop

@section('content')
  <h1>User Name: {{ $hardware->userinfo->user_name; }}</h1>
  <hr>
  <div>
      <h2>Individual information</h2>
      <p>User ID: {{ $hardware->userinfo_id; }}</p>
      <p>Invoice #{{ $hardware->invoice; }}</p>
      <p>Manufacturer: {{ $hardware->manufacturer->company_name; }}</p>
      <p>Device Type: {{ $hardware->device_name; }}</p>
      <p>CPU: {{ $hardware->cpu; }}</p>
      <p>Price: {{ $hardware->price; }}</p>
      <p>Storage Amount: {{ $hardware->storage; }}</p>
      <p>Ram: {{ $hardware->ram; }}</p>
      <hr>
      <p>Service: {{ $hardware->service; }}</p>
      <p>Notes: {{ $hardware->notes; }}</p>
      
  </div>

  

  <form style="margin: 0; padding: 0" action="{{ route('hardwares.destroy', ['hardware'=>$hardware->id]) }}" method="POST">
    <a class="btn btn-default" href="{{ route('hardwares.edit', ['hardware'=>$hardware->id]) }}">Edit</a>
    @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
  </form>    
@stop