
<?php $__env->startSection('contenido'); ?>
<div>
    <h3>Articulo-Compra 
    <a href='/articuloscompra/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Id Articulo</th>
            <th scope="col">Id Compra</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $articuloscompra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($art->id); ?></td>
                <td><?php echo e($art->articulo_id); ?></td>
                <td><?php echo e($art->compra_id); ?></td>
                <td>
                <div class="row align-items-start">
                   
                
                    <div class="col">
                    <form action='/articuloscompra/<?php echo e($art->id); ?>' method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onClick="return confirm('Se eliminará el registro ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/articuloscompra/index.blade.php ENDPATH**/ ?>