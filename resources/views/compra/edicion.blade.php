@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Edición de Compras</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/compra/{{$compras->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating my-5"> 
        <select class="form-select" aria-label="cliente" id="cliente_id" name="cliente_id">
        <option selected value="{{$compras->clientes->id}}">{{$compras->clientes->nombre}}</option>  
                  @foreach ($clientes as $cliente)
                  <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>  
                  @endforeach
                </select>
        </div>

        <div class="form-floating my-5"> 
        <input
                type="date"
                id="fecha"
                name="fecha"
                required
                class="form-control"
                  value="{{$compras->fecha}}"
              />
                <label for="fecha" class="form-label">Fecha compra:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
                type="number"
                id="total"
                name="total"
                min="1"
                required
                class="form-control"
                  value="{{$compras->total}}"
              />
                <label for="total" class="form-label">Total compra:</label>
        </div>
        <div class="text-center">
            <a class="btn btn-outline-danger" href="{{url('/compra')}}" role="button">Cancelar</a>
          <button type="submit" class="btn btn-outline-dark">Guardar</button>
        </div>
    </div>
</div>
@endsection