@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
    <p>Manufacturer Content Here</p>
    <div class="card">
        <div class="card-body">
            <table id="table" class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Action</th>
                    </tr>
                </thead>
                    <tbody>

                    </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('manufacturers.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop