@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Registro de Compras</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/compra" method="POST">
        @csrf
        @include('compra.formulario')
    </div>
</div>
@endsection