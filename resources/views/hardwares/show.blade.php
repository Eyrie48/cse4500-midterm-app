@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
  <h2>{{ $hardware->id; }}</h2>
  <div>
      <p>{{ $manufacturer->invoice; }}</p>
      <p>{{ $manufacturer->device name; }}</p>
      <p>{{ $manufacturer->cpu; }}</p>
      <p>{{ $manufacturer->price; }}</p>
      <p>{{ $manufacturer->storage; }}</p>
      <p>{{ $manufacturer->ram; }}</p>
  </div>
@stop