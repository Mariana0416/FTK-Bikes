

<?php $__env->startSection('contenido'); ?>
  <div >

    <div class="card card-body" style="align: center;">
          <form method="POST" action="/articuloscompra">
            <?php echo csrf_field(); ?>
            <h3>Lista de compras</h3>
            <select class="form-select" aria-label="cliente" id="compra_id" name="compra_id">
              <option selected> Seleccione id compra </option>
              <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($compra->id); ?>"><?php echo e($compra->id); ?> - <?php echo e($compra->clientes->nombre); ?></option>  
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        
    
        <?php echo csrf_field(); ?>
        <h3>Lista de Articulos</h3>
        <select class="form-select" aria-label="Articulos" id="articulo_id" name="articulo_id">
        <option selected> Seleccione un articulo </option>
          <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($articulo->id); ?>"><?php echo e($articulo->nombre); ?></option>  
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <style> #But1{  position:relative; top:15px;  }  </style>
                <a class="btn btn-outline-danger" href="<?php echo e(url('/articuloscompra')); ?>" id="But1" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark" id="But1">Guardar</button>
        
      </form>
    

      </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/articuloscompra/alta.blade.php ENDPATH**/ ?>