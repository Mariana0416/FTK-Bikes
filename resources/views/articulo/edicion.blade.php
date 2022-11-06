@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Edición de Articulos</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/articulo/{{$articulos->id}}" method="POST">
        @csrf
        @method('PUT')


        <div class="form-floating my-5"> 
        <input
            id="id"
            name="id"
            type="text"
            readonly
            class="form-control"
            value="{{$articulos->id}}"/>
            <label for="name" class="form-label">Id del producto:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
            id="nombre"
            name="nombre"
            type="text"
            required
            class="form-control"
            value="{{$articulos->nombre}}"/>
            <label for="nombre" class="form-label">Nombre del producto:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
            id="precio"
            name="precio"
            type="number"
            required
            min="1"
            pattern="^[0-9]+"
            class="form-control"
            value="{{$articulos->precio}}"/>
            <label for="name" class="form-label">Precio:</label>
        </div>

        
        <div class="mb-3">
                <select class="form-select" aria-label="Proveedor" id="proveedor_id" name="proveedor_id">
                  
                <option selected value="{{$articulos->proveedores->id}}" >{{$articulos->proveedores->nombre}}</option>  
                  @foreach ($proveedores as $proveedor)
                  <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>  
                  @endforeach
                  
                </select>          
            </div>

            <div class="text-center">
                <a class="btn btn-outline-danger" href="{{url('/articulo')}}" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark">Guardar</button>
          </div>
        
    </div>
</div>
@endsection