@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
  <h2>User Name: {{ $hardware->userinfo->user_name; }}</h2>
  <h2>User ID: {{ $hardware->userinfo_id; }}</h2>
  <div>
      <p>Invoice #{{ $hardware->invoice; }}</p>
      <p>Device Type: {{ $hardware->device_name; }}</p>
      <p>CPU: {{ $hardware->cpu; }}</p>
      <p>Price: {{ $hardware->price; }}</p>
      <p>Storage Amount: {{ $hardware->storage; }}</p>
      <p>Ram: {{ $hardware->ram; }}</p>
      
  </div>
@stop