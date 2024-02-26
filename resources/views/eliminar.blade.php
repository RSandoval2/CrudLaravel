@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('Contenido')
<div class="card">
    <h5 class="card-header">Eliminar registro</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                <thead>
                    <th>Fecha de nacimiento</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                 </thead>
                    <tbody>
                        <tr>
                            <td>{{ $personas->fecha_nacimiento }}</td>
                            <td>{{ $personas->apellido }}</td>
                            <td>{{ $personas->nombre }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("personas.index") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar 
                    </button>
                </form>
            </div>
        </p>
        
    </div>
</div>
@endsection


