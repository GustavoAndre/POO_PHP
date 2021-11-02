<div class="row justify-content-md-center m-auto">

<div class="col-6">
<div class="card " style="background-color:  #eaecee ;">
    <div class="card-header">
      Agregar producto
    </div>
    <div class="card-body">

      <form action="" method="post">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del producto">

        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion:</label>
          <input required type="text" class="form-control" name="descripcion" id="nombre" aria-describedby="helpId" placeholder="descripcion">

        </div>

        <div class="mb-3">
          <label for="categoria" class="form-label">Categoria:</label>
          <input required type="text" class="form-control" name="categoria" id="nombre" aria-describedby="helpId" placeholder="categoria">

        </div>

        <div class="mb-3">
          <label for="precio" class="form-label">precio:</label>
          <input required type="text" class="form-control" name="precio" id="nombre" aria-describedby="helpId" placeholder="precio del producto">

        </div>

        <div class="mb-3">
          <label for="stock" class="form-label">Stock:</label>
          <input required type="text" class="form-control" name="stock" id="nombre" aria-describedby="helpId" placeholder="stock">

        </div>

        <div class="mb-3">
          <label for="imagen" class="form-label">imagen:</label>
          <input required type="text" class="form-control" name="imagen" id="nombre" aria-describedby="helpId" placeholder="imagen">

        </div>

        <input name="" id="" class="btn btn-primary" type="submit" value="Aceptar">

        <a href="?controlador=productos&accion=inicio" class="btn btn-danger">Cancelar</a>

      </form>

    </div>

  </div>
</div>

</div>