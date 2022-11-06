@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Registro de Articulos</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/articulo" method="POST">
        @csrf
        @include('articulo.formulario')
    </div>
</div>
@endsection