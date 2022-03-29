@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
  <h1>Hardware</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.update', ['hardware'=>$hardware->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-select name="userinfo_id" value="{{ $hardware->userinfo_id }}" label="Userinfo">
    @foreach($userinfos AS $userinfo)
      @if($userinfo->id == $hardware->userinfo_id)
        <option value='{{ $userinfo->id }}' selected="selected">{{ $userinfo->user_email }}</option>
      @else
        <option value='{{ $userinfo->id }}'>{{ $userinfo->user_email }}</option>
      @endif
    @endforeach
  </x-adminlte-select>
  
  
  <x-adminlte-input name="invoice" value="{{ $hardware->invoice }}" label="Invoice" />

  <x-adminlte-select name="manufacturer_id" value="{{ $hardware->manufacturer_id }}" label="Manufacturer">
    @foreach($manufacturers AS $manufacturer)
      @if($manufacturer->id == $hardware->manufacturer_id)
        <option value='{{ $manufacturer->id }}' selected="selected">{{ $manufacturer->company_name }}</option>
      @else
        <option value='{{ $manufacturer->id }}'>{{ $manufacturer->company_name }}</option>
      @endif
    @endforeach
  </x-adminlte-select>
  
  <x-adminlte-input name="cpu" value="{{ $hardware->cpu }}" label="CPU" />
  <x-adminlte-input name="price" value="{{ $hardware->price }}" label="Price" />
  <x-adminlte-input name="purchaseDate" type="datetime-local" value="{{ $hardware->purchaseDate }}" label="Purchase Date" />
  <x-adminlte-input name="ram" value="{{ $hardware->ram }}" label="Ram" />
  <x-adminlte-input name="storage" value="{{ $hardware->storage }}" label="Storage" />
  <x-adminlte-select name="device_name" value="{{ $hardware->device_name }}" label="Device" >
    <x-adminlte-options :options="['Desktop', 'Laptop', 'Tablet', 'Phone']" value="{{ $hardware->device_name }}" />
    </x-adminlte-select>
  <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop