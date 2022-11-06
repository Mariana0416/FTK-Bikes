<div class="form-floating my-5">

<div class="text-center">
                
              
          </div>
          <div class="mb-3">
                <select class="form-select" aria-label="cliente" id="cliente_id" name="cliente_id">
                  <option selected>Cliente</option>
                  @foreach ($clientes as $cliente)
                  <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>  
                  @endforeach
                </select>          
            </div>
        </div>

          <div class="form-floating my-5">
              <input
                type="date"
                id="fecha"
                name="fecha"
                required
                class="form-control"
                @if(isset($compra))
                  value="{{$compra->fecha}}"
                @endif
              />
                <label for="fecha" class="form-label">Fecha compra:</label>
                </div>

                <div class="form-floating my-5">
              <input
                type="number"
                id="total"
                name="total"
                required
                class="form-control"
                @if(isset($compra))
                  value="{{$compra->total}}"
                @endif
              />
                <label for="total" class="form-label">Total compra:</label>
                </div>
            <div class="text-center">
                <a class="btn btn-outline-danger" href="{{url('/compra')}}" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark">Guardar</button>
          </div>
      </form>