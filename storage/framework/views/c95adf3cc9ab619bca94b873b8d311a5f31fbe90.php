

<?php $__env->startSection('contenido'); ?>
<div class="text-center">
    <h2>Registro de Clientes</h2>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/cliente" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('cliente.formulario', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/cliente/alta.blade.php ENDPATH**/ ?>