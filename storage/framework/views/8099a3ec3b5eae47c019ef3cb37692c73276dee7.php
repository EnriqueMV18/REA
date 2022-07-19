
<?php $__env->startSection('contenido'); ?>
<h1><?php echo e($modo); ?> Socio</h1>


    <form class="form-inline" role="form" action=""></form>
    <div class="form-group float-left" >
    <label for="Nombre" display="flex" >Nombres</label>
    <input type="text" aria-label="default input example" class="form-control" name="Nombre" value="<?php echo e(isset($socio->Nombre)?$socio->Nombre:''); ?>" id="Nombre">
    <br>
    </div>
&nbsp;
    <div class="form-group float-left">
    <label for="ApellidoPaterno">ApellidoPaterno</label>
    <input type="text"  class="form-control" name="ApellidoPaterno" value="<?php echo e(isset($socio->ApellidoPaterno)?$socio->ApellidoPaterno:''); ?>" id="ApellidoPaterno">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left" >
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="<?php echo e(isset($socio->ApellidoMaterno)?$socio->ApellidoMaterno:''); ?>" id="ApellidoMaterno">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Sexo" class="form-label">Sexo</label>
    <input type="text" class="form-control" name="Sexo" list="datalistOptions" value="<?php echo e(isset($socio->Sexo)?$socio->Sexo:''); ?>" id="Sexo">
    <datalist id="datalistOptions">
    <option value="M">
    <option value="F">
    </datalist>
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Dni">Dni</label>
    <input type="double"  class="form-control" name="Dni" value="<?php echo e(isset($socio->Dni)?$socio->Dni:''); ?>" id="Dni">
    <br>
    </div>
&nbsp;
    <div class="form-group float-left">
    <label for="Direccion">Direccion</label>
    <input type="text"  class="form-control" name="Direccion" value="<?php echo e(isset($socio->Direccion)?$socio->Direccion:''); ?>" id="Direccion">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Telefono">Telefono</label>
    <input type="double" class="form-control" name="Telefono" value="<?php echo e(isset($socio->Telefono)?$socio->Telefono:''); ?>" id="Telefono">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left mb-3">
    <label for="Correo" class="form-label">Correo</label>
    <input type="email"  class="form-control" name="Correo" value="<?php echo e(isset($socio->Correo)?$socio->Correo:''); ?>" id="Correo">
    <br></div>
    &nbsp;
    <div class="form-group float-left">
    <label for="FechaNacimiento">FechaNacimiento</label>
    <input type="date" class="form-control" name="FechaNacimiento" value="<?php echo e(isset($socio->FechaNacimiento)?$socio->FechaNacimiento:''); ?>" id="FechaNacimiento">
    <br></div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Ocupacion">Ocupacion</label>
    <input type="text" class="form-control" name="Ocupacion" value="<?php echo e(isset($socio->Ocupacion)?$socio->Ocupacion:''); ?>" id="Ocupacion">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Codigo">Codigo</label>
    <input type="double" class="form-control" name="Codigo" value="<?php echo e(isset($socio->Codigo)?$socio->Codigo:''); ?>" id="Codigo">
    <br>
    </div>
    &nbsp;
    <div  class="mb-3 form-group float-left">
    <label for="Foto" class="form-label">Foto</label>
    <?php if(isset($socio->Foto)): ?>
    <img class="form-control " type="file" src="<?php echo e(asset('storage').'/'.$socio->Foto); ?>" width="100" alt="">
    <?php endif; ?>
    <input type="file" name="Foto" id="Foto">
    <br></div>
    &nbsp;

    <button type="Submit" class="btn btn-outline-danger float-left" value="<?php echo e($modo); ?> Datos ">
        CREAR DATOS
    </button>
    <br>
    &nbsp;
    <button type="button" class="btn btn-outline-success float-left">
        <a href="<?php echo e(url('socio/')); ?>">CANCELAR</a>
    </button>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rea\resources\views/socio/form.blade.php ENDPATH**/ ?>