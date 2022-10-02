@extends('plantilla/plantilla')

@section("tituloPagina", "Eliminar Registro")

@section('contenido')
<div class="card">
    <div class="card-header">
     Eliminar
    </div>
    <div class="card-body">
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estas seguro de eliminar?!?!?

            
            <hr>
            <form action="{{ route('formulario.destroy', $discount->id) }}" method="POST">
                @csrf
                @method('PUT')
                <a href="{{route('descuentos.principal')}}" class="btn btn-secondary">Volver</a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
          </div>
      </p>
    </div>
  </div>
@endsection