@extends('plantilla/plantilla')

@section("tituloPagina", "Actualizar Registro")

@section('contenido')

@php
    $id = $discount->id
@endphp

@livewire('create-update', compact('discount'))


@endsection