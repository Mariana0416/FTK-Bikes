
<?php $__env->startSection('contenido'); ?>
<div>
    <h3>Listado de proveedores    
    <a href='/proveedor/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead >
            <th scope="col">ID</th>
            <th scope="col">Nombre proveedor</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prov): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($prov->id); ?></td>
                <td><?php echo e($prov->nombre); ?></td>
                <td><?php echo e($prov->correo); ?></td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/proveedor/<?php echo e($prov->id); ?>/edit' class="btn btn-outline-light" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/proveedor/<?php echo e($prov->id); ?>' method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onClick="return confirm('Se borrará el proveedor ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/proveedor/index.blade.php ENDPATH**/ ?>