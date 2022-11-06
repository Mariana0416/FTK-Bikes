

<?php $__env->startSection('contenido'); ?>
<div class="text-center">
    <h2>Edición de Proveedores</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/proveedor/<?php echo e($proveedores->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-floating my-5"> 
        <input
            id="id"
            name="id"
            type="text"
            readonly
            class="form-control"
            value="<?php echo e($proveedores->id); ?>"/>
            <label for="id" class="form-label">Id del proveedor:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
            id="nombre"
            name="nombre"
            type="text"
            class="form-control"
            value="<?php echo e($proveedores->nombre); ?>"/>
            <label for="nombre" class="form-label">Nombre del proveedor:</label>
        </div>

        <div class="form-floating my-5"> 
        <input
            id="correo"
            name="correo"
            type="email"
            class="form-control"
            value="<?php echo e($proveedores->correo); ?>"/>
            <label for="correo" class="form-label">Correo:</label>
        </div>

        <div class="text-center">
            <a class="btn btn-outline-danger" href="<?php echo e(url('/proveedor')); ?>" role="button">Cancelar</a>
          <button type="submit" class="btn btn-outline-dark">Guardar</button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/proveedor/edicion.blade.php ENDPATH**/ ?>