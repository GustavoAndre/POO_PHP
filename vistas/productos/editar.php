<div class="row justify-content-md-center m-auto">
  <div class="col-6" >
    <div class="card" style="background-color:  #eaecee ;">
      <div class="card-header text-center">
       <b> Editar Producto </b> 
      </div>
      <div class="card-body">

        <form action="" method="post">

          <div class="mb-3">
            <label for="id" class="form-label">ID:</label>
            <input readonly type="text" class="form-control" value="<?php echo $producto->id ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID producto">

          </div>


          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input required type="text" class="form-control" value="<?php echo $producto->nombre ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del producto">

          </div>

          <div class="mb-3">
            <label for="descripcion" class="form-label">descripcion:</label>
            <input required type="text" class="form-control" value="<?php echo $producto->descripcion ?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Nombre del producto">

          </div>

          <div class="mb-3">
            <label for="categoria" class="form-label">categoria:</label>
            <input required type="text" value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" id="tipo_producto" aria-describedby="emailHelpId" placeholder="Correo del producto">

          </div>

          <div class="mb-3">
            <label for="precio" class="form-label">precio:</label>
            <input required type="text" value="<?php echo $producto->precio ?>" class="form-control" name="precio" id="precio" aria-describedby="emailHelpId" placeholder="Correo del producto">

          </div>

          <div class="mb-3">
            <label for="stock" class="form-label">stock:</label>
            <input required type="text" value="<?php echo $producto->stock ?>" class="form-control" name="stock" id="cantidad" aria-describedby="emailHelpId" placeholder="Correo del producto">

          </div>

          <div class="mb-3">
            <label for="img" class="form-label">imagen:</label>
            <input required type="text" class="form-control" value="<?php echo $producto->img ?>" name="img" id="img" aria-describedby="helpId" placeholder="Nombre del producto">

          </div>

          <input name="" id="" class="btn btn-primary" type="submit" value="Editar producto">

          <a href="?controlador=productos&accion=inicio" class="btn btn-danger">Cancelar</a>

        </form>

      </div>

    </div>
  </div>
</div>