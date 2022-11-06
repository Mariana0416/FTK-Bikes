@extends('base')

@section('contenido')
  <div >

    <div class="card card-body" style="align: center;">
          <form method="POST" action="/articuloscompra">
            @csrf
            <h3>Lista de compras</h3>
            <select class="form-select" aria-label="cliente" id="compra_id" name="compra_id">
              <option selected> Seleccione id compra </option>
              @foreach ($compras as $compra)
              <option value="{{$compra->id}}">{{$compra->id}} - {{$compra->clientes->nombre}}</option>  
              @endforeach
            </select>
        
    
        @csrf
        <h3>Lista de Articulos</h3>
        <select class="form-select" aria-label="Articulos" id="articulo_id" name="articulo_id">
        <option selected> Seleccione un articulo </option>
          @foreach ($articulos as $articulo)
          <option value="{{$articulo->id}}">{{$articulo->nombre}}</option>  
          @endforeach
        </select>

        <style> #But1{  position:relative; top:15px;  }  </style>
                <a class="btn btn-outline-danger" href="{{url('/articuloscompra')}}" id="But1" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark" id="But1">Guardar</button>
        
      </form>
    

      </form>
</div>
@endsection