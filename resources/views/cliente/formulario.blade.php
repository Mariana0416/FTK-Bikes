<div class="form-floating my-5">
          <input
            type="name"
            id="nombre"
            name="nombre"
            required
            class="form-control"
            @if(isset($cliente))
                value="{{$cliente->nombre}}"
            @endif
          />
          <label for="name" class="form-label">Nombre del cliente:</label>
        </div>
        <div class="form-floating my-5">
            <input
              type="email"
              id="correo"
              name="correo"
              required
              class="form-control"
              @if(isset($cliente))
                value="{{$cliente->correo}}"
              @endif
            />
            <label for="correo" class="form-label">Correo:</label>
</div>
        <div class="text-center">
            <a class="btn btn-outline-danger" href="{{url('/cliente')}}" role="button">Cancelar</a>
          <button type="submit" class="btn btn-outline-dark">Guardar</button>
        </div>
      </form>