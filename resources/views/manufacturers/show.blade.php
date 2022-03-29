@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
  <h1>Manufacturers</h1>
@stop

@section('content')
  <h2>{{ $manufacturer->company_name; }}</h2>
  <hr>
  <div>
    <h4>Sales Contact Information</h4>
    <p>Name: {{ $manufacturer->sales_name; }}</p>
    <p>Email: {{ $manufacturer->sales_email; }}</p>
    <h4>Tech Support Contact Information</h4>
    <p>Name: {{ $manufacturer->tech_name; }}</p>
    <p>Email: {{ $manufacturer->tech_email; }}</p>
  </div>

  <form style="margin: 0; padding: 0">
    <a class="btn btn-default" href="{{ route('manufacturers.edit', ['manufacturer'=>$manufacturer->id]) }}">Edit</a>
  </form>  
@stop