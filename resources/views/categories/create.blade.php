@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
<form method="post" action="{{ route('categories.store') }}" >
    @csrf
    <x-adminlte-input name="category_name" label="Category Name" />
    <x-adminlte-input name="device_name" label="Device Name" />
    <x-adminlte-input name="serial_num" label="Serial Number" />
    <x-adminlte-input name="price" label="Price" />
    <x-adminlte-input name="ram" type="number" min=0 max=100 label="Ram" />
    <x-adminlte-input name="storage" type="number" min=0 max=100 label="Storage" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop