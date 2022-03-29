@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h3>Hardware Information</h3>
@stop

@section('content')
  <h1>User Name: {{ $hardware->userinfo->user_name; }}</h1>

  <div>
      <p>Individual information</p>
      <p>User ID: {{ $hardware->userinfo_id; }}</p>
      <p>Invoice #{{ $hardware->invoice; }}</p>
      <p>Manufacturer: {{ $hardware->manufacturer->company_name; }}</p>
      <p>Device Type: {{ $hardware->device_name; }}</p>
      <p>CPU: {{ $hardware->cpu; }}</p>
      <p>Price: {{ $hardware->price; }}</p>
      <p>Storage Amount: {{ $hardware->storage; }}</p>
      <p>Ram: {{ $hardware->ram; }}</p>
  </div>
  <a class="btn btn-default btn-sm" href="{{ route('hardwares.delete',['hardware'=>$hardware->id]) }}">View</a></td>
@stop