@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.store') }}" >
    @csrf
    <x-adminlte-input name="userinfo_id" label="User ID" />
    <x-adminlte-input name="invoice" label="Invoice" />
    <x-adminlte-options :options="['Desktop', 'Laptop, 'Tablet', 'Phone']" placeholder="Select an option..."/>
    <x-adminlte-input name="cpu" type="number" min=0 max=100 label="Cpu" />
    <x-adminlte-input name="price" label="Price" />
    <x-adminlte-input name="purchaseDate" type="datetime-local" label="Purchase Date"/>
    <x-adminlte-input name="ram" type="number" min=0 max=100 label="Ram" />
    <x-adminlte-input name="storage" type="number" min=0 max=2000 label="Storage" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop