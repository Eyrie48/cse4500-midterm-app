@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.store') }}" >
    @csrf
    <x-adminlte-select name="userinfo_id" label="User ID" />
    @foreach($userinfos AS $userinfo)
      <option value='{{ $userinfo->id }}'>{{ $userinfo->user_email }}</option>
    @endforeach
    </x-adminlte-select>

    <x-adminlte-select name="manufacturer_id" label="Manufacturer ID">
    @foreach($manufacturers AS $manufacturer)
      <option value='{{ $manufacturer->id }}'>{{ $manufacturer->company_name }}</option>
    @endforeach
    </x-adminlte-select>

    <x-adminlte-input name="invoice" label="Invoice" />
    
    <x-adminlte-input name="cpu"  label="CPU Core" />
    <x-adminlte-input name="price" label="Price" />
    <x-adminlte-input name="purchaseDate" type="datetime-local" label="Purchase Date"/>
    <x-adminlte-input name="ram"  label="Ram" />
    <x-adminlte-input name="storage" label="Storage" />
    <x-adminlte-select name="device_name" label="Device" >
        <x-adminlte-options :options="['Desktop', 'Laptop', 'Tablet', 'Phone']" 
            placeholder="Select an option..." />
    </x-adminlte-select>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop