@extends('plantilla/plantilla')

@section("tituloPagina", "Eliminar Registro")

@section('contenido')
<div class="card">
    <div class="card-header">
     {{trans('messages.Borrar')}}
    </div>
    <div class="card-body">
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            {{trans('messages.BorrarMensaje')}}

            
            <hr>
            <form action="{{ route('formulario.destroy', $discount->id) }}" method="POST">
                @csrf
                @method('PUT')
                <a href="{{route('descuentos.principal')}}" class="btn btn-secondary">{{trans('messages.Volver')}}</a>
                <button class="btn btn-danger">{{trans('messages.Borrar')}}</button>
            </form>
          </div>
      </p>
    </div>
  </div>
@endsection