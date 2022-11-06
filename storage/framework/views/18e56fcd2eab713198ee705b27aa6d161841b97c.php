<div class="form-floating my-5">

<div class="text-center">
                
              
          </div>
          <div class="mb-3">
                <select class="form-select" aria-label="cliente" id="cliente_id" name="cliente_id">
                  <option selected>Cliente</option>
                  <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nombre); ?></option>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php if(isset($compra)): ?>
                  value="<?php echo e($compra->fecha); ?>"
                <?php endif; ?>
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
                <?php if(isset($compra)): ?>
                  value="<?php echo e($compra->total); ?>"
                <?php endif; ?>
              />
                <label for="total" class="form-label">Total compra:</label>
                </div>
            <div class="text-center">
                <a class="btn btn-outline-danger" href="<?php echo e(url('/compra')); ?>" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark">Guardar</button>
          </div>
      </form><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/compra/formulario.blade.php ENDPATH**/ ?>