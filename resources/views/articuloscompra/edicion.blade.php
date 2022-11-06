@extends('base')

@section('contenido')
<div >

    <div class="card card-body" style="align: center;">
          <form method="POST" action="/articuloscompra">
            @csrf
            <h3>Lista de compras</h3>
            <select class="form-select" aria-label="cliente" id="cliente_id" name="cliente_id">
            <option selected> Seleccione </option>
              @foreach ($compras as $compra)
              <option value="{{$compra->id}}">{{$compra->id}}</option>  
              @endforeach
            </select>
        
    </div>



  
    <div class="card card-body" style="align: center;">
        @csrf
        <h3>Lista de Articulos</h3>
        <select class="form-select" aria-label="Articulos" id="articulo_id" name="articulo_id">
        <option selected value="{{$articuloscompra->articulos->id}}">{{$articuloscompras->articulos->nombre}}</option>  
          @foreach ($articulos as $articulo)
          <option value="{{$articulo->id}}">{{$articulo->nombre}}</option>  
          @endforeach
        </select>
</div>
    

<div class="text-center">
                <a class="btn btn-outline-danger" href="{{url('/articuloscompra')}}" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark">Guardar</button>
          </div>
      </form>
    
</div>
@endsection