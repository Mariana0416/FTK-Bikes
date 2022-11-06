

<?php $__env->startSection('contenido'); ?>
<div class="text-center">
    <h2>Edición de Articulos</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/articulo/<?php echo e($articulos->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>


        <div class="form-floating my-5"> 
        <input
            id="id"
            name="id"
            type="text"
            readonly
            class="form-control"
            value="<?php echo e($articulos->id); ?>"/>
            <label for="name" class="form-label">Id del producto:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
            id="nombre"
            name="nombre"
            type="text"
            required
            class="form-control"
            value="<?php echo e($articulos->nombre); ?>"/>
            <label for="nombre" class="form-label">Nombre del producto:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
            id="precio"
            name="precio"
            type="number"
            required
            min="1"
            pattern="^[0-9]+"
            class="form-control"
            value="<?php echo e($articulos->precio); ?>"/>
            <label for="name" class="form-label">Precio:</label>
        </div>

        
        <div class="mb-3">
                <select class="form-select" aria-label="Proveedor" id="proveedor_id" name="proveedor_id">
                  
                <option selected value="<?php echo e($articulos->proveedores->id); ?>" ><?php echo e($articulos->proveedores->nombre); ?></option>  
                  <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($proveedor->id); ?>"><?php echo e($proveedor->nombre); ?></option>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </select>          
            </div>

            <div class="text-center">
                <a class="btn btn-outline-danger" href="<?php echo e(url('/articulo')); ?>" role="button">Cancelar</a>
              <button type="submit" class="btn btn-outline-dark">Guardar</button>
          </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/articulo/edicion.blade.php ENDPATH**/ ?>