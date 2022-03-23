@extends('adminlte::page')

@section('title', 'Userinfo')

@section('content_header')
    <h1>User Information</h1>
@stop

@section('content')
    <p>User Information Content Here</p>
    <div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">Id#</th><th>User Name</th><th>User Email</th><th>Phone Number</th><th style="width: 40px"></th>
        </tr>
      </thead>
      <tbody>
      @foreach($todos AS $todo)
        <tr>
          <td>{{ $userinfo->id }}</td>
          <td>{{ $userinfo->user_name }}</td>
          <td>{{ $userinfo->user_email }}</td>
          <td>{{ $userinfo->phone_number }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('userinfos.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop