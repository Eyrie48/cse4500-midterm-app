@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
    <p>Hardware Content Here</p>
    <div class="card">
      <div class="card-body">
        <table id="table" class="table table-bordered">
          <thead>
            <tr>
            <th>User ID</th><th>Invoice#</th><th>Device Name</th><th>CPU Cores</th><th>Price</th><th>Purchase Date</th><th>Ram</th><th>Storage</th><th>View</th>
            </tr>
          </thead>
          <tbody>
            @foreach($hardwares AS $hardware)
              <tr>
                <td>{{ $hardware->userinfo_id }}</td>
                <td>{{ $hardware->invoice }}</td>
                <td>{{ $hardware->device_name }}</td>
                <td>{{ $hardware->cpu }}</td>
                <td>{{ $hardware->price }}</td>
                <td>{{ $hardware->purchaseDate }}</td>
                <td>{{ $hardware->ram }}</td>
                <td>{{ $hardware->storage }}</td>
                <td><a class="btn btn-default btn-sm" href="{{ route('hardwares.show',['hardware'=>$hardware->id]) }}">View</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <a href="{{ route('hardwares.create') }} " class="btn btn-primary" >Create</a>
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