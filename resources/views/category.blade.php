@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <h1>Category</h1>
@stop

@section('content')
    <p>Category Content Here</p>
@stop

@section('css')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Category Name</th><th>Device Name</th><th>Serial Num</th><th>Price</th><th>Ram</th><th>Storage</th><th style="width: 40px"></th>
        </tr>
      </thead>
      <tbody>

        @foreach($categories AS $categories)
        <tr>
          <td>{{ $categories->category_name }}</td>
          <td>{{ $categories->device_name }}</td>
          <td>{{ $categories->serial_num }}</td>
          <td>{{ $categories->price }}</td>
          <td>{{ $categories->ram }}</td>
          <td>{{ $categories->storage }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('categories.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
