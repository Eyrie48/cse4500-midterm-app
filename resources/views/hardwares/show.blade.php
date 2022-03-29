@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h3>Hardware Information</h3>
@stop

@section('content')
  <h1>User Name: {{ $hardware->userinfo->user_name; }}</h1>

  <div>
      <p>User ID: {{ $hardware->userinfo_id; }}</p>
      <p>Individual information</p>
      <p>Invoice #{{ $hardware->invoice; }}</p>
      <p>Device Type: {{ $hardware->device_name; }}</p>
      <p>CPU: {{ $hardware->cpu; }}</p>
      <p>Price: {{ $hardware->price; }}</p>
      <p>Storage Amount: {{ $hardware->storage; }}</p>
      <p>Ram: {{ $hardware->ram; }}</p>
      
  </div>
@stop