

<?php $__env->startSection('contenido'); ?>
<div class="text-center">
    <h2>Edición de Compras</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/compra/<?php echo e($compras->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-floating my-5"> 
        <select class="form-select" aria-label="cliente" id="cliente_id" name="cliente_id">
        <option selected value="<?php echo e($compras->clientes->id); ?>"><?php echo e($compras->clientes->nombre); ?></option>  
                  <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nombre); ?></option>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>

        <div class="form-floating my-5"> 
        <input
                type="date"
                id="fecha"
                name="fecha"
                required
                class="form-control"
                  value="<?php echo e($compras->fecha); ?>"
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
                  value="<?php echo e($compras->total); ?>"
              />
                <label for="total" class="form-label">Total compra:</label>
        </div>
        <div class="text-center">
            <a class="btn btn-outline-danger" href="<?php echo e(url('/compra')); ?>" role="button">Cancelar</a>
          <button type="submit" class="btn btn-outline-dark">Guardar</button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/compra/edicion.blade.php ENDPATH**/ ?>