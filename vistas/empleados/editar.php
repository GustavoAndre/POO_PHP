<div class="row justify-content-md-center m-auto">
  <div class="col-6">
  <div class="card" style="background-color:  #eaecee ;">
      <div class="card-header text-center">
       <h5><b> Editar Empleado</b> </h5>
      </div>
      <div class="card-body">

        <form action="" method="post">

          <div class="mb-3">
            <label for="id" class="form-label">ID:</label>
            <input readonly type="text" class="form-control" value="<?php echo $empleado->id ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID Empleados">

          </div>


          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input required type="text" class="form-control" value="<?php echo $empleado->nombre ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Empleado">

          </div>

          <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input required type="email" value="<?php echo $empleado->correo ?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del Empleado">

          </div>

          <input name="" id="" class="btn btn-primary" type="submit" value="Guardar cambios">

          <a href="?controlador=empleados&accion=inicio" class="btn btn-danger">Cancelar</a>

        </form>

      </div>

    </div>
  </div>
</div>