@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('Contenido')

<div class="card">
    <h5 class="card-header">Actualizar datos</h5>
    <div class="card-body">
  
      <p class="card-text">
        <form action="{{ route('personas.update', $personas->id) }}" method="POST">
          @csrf
          @method("PUT")
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{ $personas->nombre }}">
            <label>Apellido</label>
            <input type="text" name="apellido" class="form-control" required value="{{ $personas->apellido }}">
            <label>fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required value="{{ $personas->fecha_nacimiento }}">
            <br>
            <button class="btn btn-warning">Actualizar</button>
            <a href="{{ route("personas.index") }}" class="btn btn-info" >
              <span class="fas fa-undo-alt"></span> Regresar
          </a>
          </form>
      </p>
    </div>
  </div>

@endsection
