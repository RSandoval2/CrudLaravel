@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('Contenido')

<div class="card">
    <h5 class="card-header">Agregar nueva persona</h5>
      <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
              @csrf
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label>Apellido</label>
            <input type="text" name="apellido" class="form-control" required>
            <label>fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <br>
            <button class="btn btn-primary">
              <span class="fas fa-user-plus"></span> Agregar
           </button>
           <a href="{{ route("personas.index") }}" class="btn btn-info" >
              <span class="fas fa-undo-alt"></span> Regresar
          </a>
        </form>
      </p>
  </div>

@endsection