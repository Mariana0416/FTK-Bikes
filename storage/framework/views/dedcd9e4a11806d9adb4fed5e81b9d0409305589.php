
<?php $__env->startSection('contenido'); ?>
<div>
    <h3>Listado de Compras 
    <a href='/compra/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>

    <a href='/articuloscompra/'>
        <button type="button" class="btn btn-dark">Carrito</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">Fecha</th>
            
            <th scope="col">Total</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($comp->id); ?></td>
                <td><?php echo e($comp->clientes->nombre); ?></td>
                <td><?php echo e($comp->fecha); ?></td>
                
                <td>$<?php echo e($comp->total); ?></td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/compra/<?php echo e($comp->id); ?>/edit' class="btn btn-outline-light" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/compra/<?php echo e($comp->id); ?>' method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onClick="return confirm('Se eliminará la compra ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
                            Borrar
                        </button>
                    </form>
                    </div>
                </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\ITA\TICS\6to Semestre\Programacion Web\ProyectoV2\FinalV2\resources\views/compra/index.blade.php ENDPATH**/ ?>