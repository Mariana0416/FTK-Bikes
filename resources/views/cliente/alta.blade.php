@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Registro de Clientes</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/cliente" method="POST">
        @csrf
        @include('cliente.formulario')
    </div>
</div>
@endsection