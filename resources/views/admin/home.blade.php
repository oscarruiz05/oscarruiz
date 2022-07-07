@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Bienvenido</h1>
    <p>{{$usuario->name}}</p>
@stop

@section('content')
    <p>Que haremos hoy.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
