@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Registro de Proveedores</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/proveedor" method="POST">
        @csrf
        @include('proveedor.formulario')
    </div>
</div>
@endsection