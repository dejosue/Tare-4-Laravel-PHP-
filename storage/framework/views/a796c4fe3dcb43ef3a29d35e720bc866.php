<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <form method="POST" action="<?php echo e(url('/procesarFormulario')); ?>">
    <?php echo csrf_field(); ?>
    <section>
      <!-- Campo oculto para el id_estudiante -->
      <input type="hidden" name="id_estudiante" id="id_estudiante">
      <div class="row mb-1">
        <label class="col-sm-4 col-form-label" for="carne">Carné:</label>
        <div class="col-sm-8">
          <input class="form-control" type="text" name="carne" pattern="E\d{3}" required><br>
        </div>
      </div>

      <div class="row mb-1">
        <label class="col-sm-4 col-form-label" for="nombres">Nombres:</label>
        <div class="col-sm-8">
          <input class="form-control" type="text" name="nombres" required><br>
        </div>
      </div>

      <div class="row mb-1">
        <label class="col-sm-4 col-form-label" for="apellidos">Apellidos:</label>
        <div class="col-sm-8">
          <input class="form-control" type="text" name="apellidos" required><br>
        </div>
      </div>

      <div class="row mb-1">
        <label class="col-sm-4 col-form-label" for="direccion">Dirección:</label>
        <div class="col-sm-8">
          <input class="form-control" type="text" name="direccion"><br>
        </div>
      </div>

      <div class="row mb-1">
        <label class="col-sm-4 col-form-label" for="telefono">Teléfono:</label>
        <div class="col-sm-8">
          <input class="form-control" type="text" name="telefono"><br>
        </div>
      </div>

      <div class="row mb-1">
        <label class="col-sm-4 col-form-label" for="correo_electronico">Correo Electrónico:</label>
        <div class="col-sm-8">
          <input class="form-control" type="email" name="correo_electronico"><br>
        </div>
      </div>

      <div class="row mb-1">
        <label class="col-sm-4 col-form-label" for="id_tipo_sangre">Tipo de Sangre:</label>
        <div class="col-sm-8">
          <select name="tipo_sangre" id="id_tipo_sangre">
            <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($tipo->id_tipo_sangre); ?>"><?php echo e($tipo->sangre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br>
        </div>
      </div>

      <div class="row mb-1">
        <label class="col-sm-4 col-form-label" for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <div class="col-sm-8">
          <input class="form-control" type="date" name="fecha_nacimiento" required><br>
        </div>
      </div>

      <div id="space-for-button">
        <div class="d-grid gap-2">
          <button class="btn btn-primary" type="submit" name="create" value="true">Agregar</button>
        </div>
      </div>
    </section>
  </form>
</body>

</html><?php /**PATH /home/victor/U/tarea4/resources/views/agregar.blade.php ENDPATH**/ ?>