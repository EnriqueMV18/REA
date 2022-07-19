

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>
    <form action="<?php echo e(url('/socio')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?> 
    <?php echo $__env->make('socio.form',['modo'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </form>

    <form action="<?php echo e(url('/pago')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?> 
    <?php echo $__env->make('pago.form',['modo'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </form>
    </p>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rea\resources\views/socio/create.blade.php ENDPATH**/ ?>