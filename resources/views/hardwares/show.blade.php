@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
  <h2>{{ $hardware->user_id; }}</h2>
  <div>
      <p>{{ $hardware->invoice; }}</p>
      <p>{{ $hardware->device name; }}</p>
      <p>{{ $hardware->cpu; }}</p>
      <p>{{ $hardware->price; }}</p>
      <p>{{ $hardware->storage; }}</p>
      <p>{{ $hardware->ram; }}</p>
  </div>
@stop