<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hola soy tu boleta
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
</body>
</html><?php /**PATH C:\xampp\htdocs\rea\resources\views/socio/boleta.blade.php ENDPATH**/ ?>