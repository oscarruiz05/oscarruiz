@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>
    Proyectos
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-proyecto">
        Crear
    </button>
</h1>
@stop

@section('content')
    @if (session()->has('mensaje'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{session('mensaje')}}
        </div>
    @endif
    <div class="container">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Link</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{$proyecto->nombre}}</td>
                    <td><img src="{{asset($proyecto->imagen)}}" alt="" style="width: 40px;"></td>
                    <td>{{$proyecto->link}}</td>
                    <td>
                        <a href="javascript:void(0)">
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="ver({{$proyecto->id}})" data-toggle="tooltip" data-placement="top" title="Editar">
                                <i class="fas fa-pen"></i>
                            </button>
                        </a>
                        <a href="javascript:void(0)">
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="eliminar({{$proyecto->id}})" data-toggle="tooltip" data-placement="top" title="Eliminar" style="margin-left: 2px">
                                <i class="fas fa-trash"></i>
                            </button>
                        </a>
                    </td>
                 </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    <!-- modales -->
    @include('admin.proyectos.src.modales')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('assets/js/pages/proyectos/proyecto.js')}}"></script>
@stop
