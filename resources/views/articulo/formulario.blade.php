<div class="form-floating my-5">
          <input
            type="name"
            id="nombre"
            name="nombre"
            required
            class="form-control"
            @if(isset($articulo))
                value="{{$articulo->nombre}}"
            @endif
          />
          <label for="name" class="form-label">Nombre del producto:</label>
        </div>
          <div class="form-floating my-5">
              <input
                type="number"
                id="precio"
                name="precio"
                required
                min="1"
                pattern="^[0-9]+"
                class="form-control"
                @if(isset($articulo))
                  value="{{$articulo->precio}}"
                @endif
              />
                <label for="precio" class="form-label">Precio:</label>
                </div>

              <div class="mb-3">
                <select class="form-select" aria-label="Proveedor" id="proveedor_id" name="proveedor_id">
                  <option selected>Proveedor</option>
                  @foreach ($proveedores as $proveedor)
                  <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>  
                  @endforeach
                </select>          
            </div>
            <div class="text-center">
                <a class="btn btn-outline-danger" href="{{url('/articulo')}}" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark">Guardar</button>
          </div>
      </form>