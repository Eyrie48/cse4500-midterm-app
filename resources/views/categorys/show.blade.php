@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <h1>Category Show</h1>
@stop

@section('content')
  <h2>{{ $category->category_name; }}</h2>
  <div><p>{{ $category->device_name; }}% finished</p></div>
@stop