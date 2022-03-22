@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Category Table</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Category Name</th><th>Device Name</th><th>Serial Num</th><th>Price</th><th>Ram</th><th>Storage</th><th style="width: 40px"></th>
        </tr>
      </thead>
      <tbody>

        @foreach($todos AS $todo)
        <tr>
          <td>{{ $categories->category_name }}</td>
          <td>{{ $categories->device_name }}</td>
          <td>{{ $categories->serial_num }}</td>
          <td>{{ $categories->price }}</td>
          <td>{{ $categories->ram }}</td>
          <td>{{ $categories->storage }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('todos.show',['todo'=>$todo->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('todos.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop