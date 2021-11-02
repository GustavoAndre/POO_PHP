

    <a name="" id="" class="btn btn-primary my-2" href="?controlador=productos&accion=crear" role="button">
    <i class="fas fa-plus-circle"></i> Agregar Producto</a>

    <table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>categoria</th>
            <th>precio</th>
            <th>stock</th>
            <th>img</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach($producto as $producto){ ?>

        <tr>
            <td> <?php echo $producto->id; ?> </td>
            <td> <?php echo $producto->nombre; ?> </td>
            <td> <?php echo $producto->descripcion; ?> </td>
            <td> <?php echo $producto->categoria; ?> </td>
            <td> <?php echo $producto->precio; ?> </td>
            <td> <?php echo $producto->stock; ?> </td>
            <td> <?php echo $producto->img; ?> </td>
            <th> 
            
            
                <a  href="?controlador=productos&accion=editar&id=<?php echo $producto->id; ?>" class="btn btn-success">
                    <i  class="fas fa-pen " ></i>
                </a>
                <a  href="?controlador=productos&accion=borrar&id=<?php echo $producto->id; ?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                </a>
            
            </th>
        </tr>
       
        <?php } ?>
        
    </tbody>
</table>
