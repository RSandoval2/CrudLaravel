@extends('layout/plantilla')

@section('TITULO PAGINA', 'Crud laravel')
    
@section('Contenido')

<div class="card">

    <div class="card-header text-center">
       <h1>Personas</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif
            </div>
        <p>
            <a href="{{ route("personas.create") }}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar nueva persona
            </a>
        </p>
        <hr>

      <div class="table table-responsive">
        <table class="table table-sm table-bordered text-center">
            <thead>
                <th>Eliminar</th>
                <th>Editar</th>
                <th>Fecha de nacimiento</th>
                <th>Apellido</th>
                <th>Nombre</th>
            </thead>
            <tbody>
            @foreach ($datos as $item)
                <tr>
                    <td>
                        <form action="{{ route("personas.destroy", $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <span class="fas fa-user-times"></span> Eliminar
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route("personas.edit", $item->id) }}" class="btn btn-warning btn-sm">
                            <span class="fas fa-user-edit"></span> Editar
                        </a>
                    </td>
                    <td> {{ $item->fecha_nacimiento }} </td>
                    <td> {{ $item->apellido }} </td>
                    <td> {{ $item->nombre }} </td>
                </tr>
             @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection