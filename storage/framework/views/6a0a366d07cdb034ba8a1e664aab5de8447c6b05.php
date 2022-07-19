<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1> Dashboard  </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <button type="button" class="btn btn-outline-info"><a href="socio/">Cliente</a></button>
    &nbsp;
    &nbsp;
    &nbsp; 
    <button type="button" class="btn btn-outline-warning">Pago</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <button type="button" class="btn btn-outline-success">Entrenadores</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <button type="button" class="btn btn-outline-danger">Plan de Entrenamiento</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <button type="button" class="btn btn-outline-primary">Actividades</button>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
    
    
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rea\resources\views/dashboard.blade.php ENDPATH**/ ?>