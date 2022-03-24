@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
    <p>Equipment Content Here</p>
    <div class="card">
      <div class="card-body">
        <table id="table" class="table table-bordered">
          <thead>
            <tr>
              <th>Invoice</th><th>Device Name</th><th>CPU</th><th>Price</th><th>Ram</th><th>Storage</th><th style="width: 40px"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($equipments AS $equipment)
              <tr>
                <td>{{ $equipment->invoice }}</td>
                <td>{{ $equipment->device_name }}</td>
                <td>{{ $equipment->cpu }}</td>
                <td>{{ $equipment->price }}</td>
                <td>{{ $equipment->purchaseDate }}</td>
                <td>{{ $equipment->ram }}</td>
                <td>{{ $equipment->storage }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <a href="{{ route('equipments.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop