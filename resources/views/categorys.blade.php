@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <h1>Category</h1>
@stop

@section('content')
    <p>Category Content Here</p>
    <div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Category Name</th><th>Device Name</th><th>Serial Num</th><th>Price</th><th>Ram</th><th>Storage</th><th style="width: 40px"></th>
        </tr>
      </thead>
      <tbody>

        
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('categorys.create') }} " class="btn btn-primary" >Create</a>
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
