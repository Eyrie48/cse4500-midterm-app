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
    <p>{{ $manufacturer->sales_name; }}</p>
    <p>{{ $manufacturer->sales_email; }}</p>
    <h4>Tech Support Contact Information</h4>
    <p>{{ $manufacturer->tech_name; }}</p>
    <p>{{ $manufacturer->tech_email; }}</p>
  </div>
@stop