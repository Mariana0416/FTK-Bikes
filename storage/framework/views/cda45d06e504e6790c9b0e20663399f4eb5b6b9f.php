<div class="form-floating my-5">
          <input
            type="name"
            id="nombre"
            name="nombre"
            required
            class="form-control"
            <?php if(isset($articulo)): ?>
                value="<?php echo e($articulo->nombre); ?>"
            <?php endif; ?>
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
                <?php if(isset($articulo)): ?>
                  value="<?php echo e($articulo->precio); ?>"
                <?php endif; ?>
              />
                <label for="precio" class="form-label">Precio:</label>
                </div>

              <div class="mb-3">
                <select class="form-select" aria-label="Proveedor" id="proveedor_id" name="proveedor_id">
                  <option selected>Proveedor</option>
                  <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($proveedor->id); ?>"><?php echo e($proveedor->nombre); ?></option>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>          
            </div>
            <div class="text-center">
                <a class="btn btn-outline-danger" href="<?php echo e(url('/articulo')); ?>" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark">Guardar</button>
          </div>
      </form><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/articulo/formulario.blade.php ENDPATH**/ ?>