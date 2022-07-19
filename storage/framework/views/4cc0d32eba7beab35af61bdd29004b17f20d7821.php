

<?php $__env->startSection('title', 'Socios'); ?>

<?php $__env->startSection('content_header'); ?>
    
    <h1 class="bg-success text-white text-center p-3 mb-2 ">Lista de Socios</h1>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>
    <?php if(Session::has('mensaje')): ?>
    <?php echo e(Session::get('mensaje')); ?>

    <?php endif; ?>


<div class="contenedor1"></div>
<button type="button" class="btn btn-outline-primary"><a href="<?php echo e(url('socio/create')); ?>">Nuevo Socio</a></button>
&nbsp;
&nbsp;
<button type="button" class="btn btn-outline-danger"><a href="<?php echo e(url('boleta/create')); ?>">Boleta de Venta</a></button>
</div>



<div class="contenedor2">
    <table id="socios" style="width:100%" class="table table-dark table-striped 
    table-bordered shadow-lg mt-4 table-responsive">
    <thead class="thead-dark bg-dark text-white">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
            <th>Sexo</th>
            <th>Dni</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>FechaNacimiento</th>
            <th>Ocupacion</th>
            <th>Acciones</th>

        </tr>
    </thead>

    <tbody class="table thead-danger">
        <?php $__currentLoopData = $socios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($socio->id); ?></td>

            <td>
                <img src="<?php echo e(asset('storage').'/'.$socio->Foto); ?>" width="100" alt="">
            </td>

            <td><?php echo e($socio->Codigo); ?></td>
            <td><?php echo e($socio->Nombre); ?></td>
            <td><?php echo e($socio->ApellidoPaterno); ?></td>
            <td><?php echo e($socio->ApellidoMaterno); ?></td>
            <td><?php echo e($socio->Sexo); ?></td>
            <td><?php echo e($socio->Dni); ?></td>
            <td><?php echo e($socio->Direccion); ?></td>
            <td><?php echo e($socio->Telefono); ?></td>
            <td><?php echo e($socio->Correo); ?></td>
            <td><?php echo e($socio->FechaNacimiento); ?></td>
            <td><?php echo e($socio->Ocupacion); ?></td>
            <td style="text-align:right"> 
                
            <a class="btn btn-warning" href="<?php echo e(url('/socio'.$socio->id.'/edit')); ?>">Editar</a>
            | 

            <form action="<?php echo e(url('/socio/'.$socio->id)); ?>" method="post">  
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')"
            value="Borrar">
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>

    
</div>

    </p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" 
rel="stylesheet" >
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
        $('#socios').DataTable({
            "language":{
                "search":"Buscar",
                "lengthMenu": "Mostar _MENU_ registros por pagina",
                "info": "Mostrando página _PAGE_ de _PAGES",
                "paginate":{
                    "previous":"Anterior",
                    "next":"Siguiente",
                    "first":"Primero",
                    "last":"Último"
                }

            }
        });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rea\resources\views/socio/index.blade.php ENDPATH**/ ?>