@extends('adminlte::page')

@section('title', 'Dashboard')

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
                    <td><img src="{{ \Storage::url($proyecto->imagen) }}" alt="" style="width: 40px;"></td>
                    <td>{{$proyecto->link}}</td>
                    <td>
                        <a href="#"><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar">
                            <i class="fas fa-pen"></i>
                        </button></a>
                        <a href="#"><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar" style="margin-left: 2px">
                            <i class="fas fa-trash"></i>
                        </button></a>
                    </td>
                 </tr>
            @endforeach
          </tbody>
        </table>
    </div>


    <!-- modal -->
    <div class="modal fade" id="modal-create-proyecto">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Proyecto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.proyectos.crear')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" name="imagen" id="imagen" accept="image/*" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" id="link" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </div>
                </form>
            </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop