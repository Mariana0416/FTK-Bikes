@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Edición de Proveedores</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/proveedor/{{$proveedores->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating my-5"> 
        <input
            id="id"
            name="id"
            type="text"
            readonly
            class="form-control"
            value="{{$proveedores->id}}"/>
            <label for="id" class="form-label">Id del proveedor:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
            id="nombre"
            name="nombre"
            type="text"
            class="form-control"
            value="{{$proveedores->nombre}}"/>
            <label for="nombre" class="form-label">Nombre del proveedor:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
            id="correo"
            name="correo"
            type="email"
            class="form-control"
            value="{{$proveedores->correo}}"/>
            <label for="correo" class="form-label">Correo:</label>
        </div>

        <div class="text-center">
            <a class="btn btn-outline-danger" href="{{url('/proveedor')}}" role="button">Cancelar</a>
          <button type="submit" class="btn btn-outline-dark">Guardar</button>
        </div>
    </div>
</div>
@endsection