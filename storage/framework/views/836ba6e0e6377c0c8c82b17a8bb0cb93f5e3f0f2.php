
<?php $__env->startSection('contenido'); ?>
<div>
    <h3>Listado de clientes 
    <a href='/cliente/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cli->id); ?></td>
                <td><?php echo e($cli->nombre); ?></td>
                <td><?php echo e($cli->correo); ?></td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/cliente/<?php echo e($cli->id); ?>/edit' class="btn btn-outline-light" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/cliente/<?php echo e($cli->id); ?>' method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onClick="return confirm('Se eliminará el cliente ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
                            Borrar
                        </button>
                    </form>
                </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/cliente/index.blade.php ENDPATH**/ ?>