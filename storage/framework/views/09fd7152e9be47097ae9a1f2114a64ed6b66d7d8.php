<div class="form-floating my-5">
          <input
            type="name"
            id="nombre"
            name="nombre"
            required
            class="form-control"
            <?php if(isset($cliente)): ?>
                value="<?php echo e($cliente->nombre); ?>"
            <?php endif; ?>
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
              <?php if(isset($cliente)): ?>
                value="<?php echo e($cliente->correo); ?>"
              <?php endif; ?>
            />
            <label for="correo" class="form-label">Correo:</label>
</div>
        <div class="text-center">
            <a class="btn btn-outline-danger" href="<?php echo e(url('/cliente')); ?>" role="button">Cancelar</a>
          <button type="submit" class="btn btn-outline-dark">Guardar</button>
        </div>
      </form><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/cliente/formulario.blade.php ENDPATH**/ ?>