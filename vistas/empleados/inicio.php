
    

<table class="table  table-dark table-hover mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach($empleados as $empleado){ ?>

        <tr>
            <td> <?php echo $empleado->id; ?> </td>
            <td class="align-middlee"> <?php echo $empleado->nombre; ?> </td>
            <td> <?php echo $empleado->correo; ?> </td>
            <th> 
                <a  href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id; ?>" class="btn btn-success">
                <i  class="fas fa-pen " ></i>
                </a>
                <a  href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id; ?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                </a>
            
            </th>
        </tr>
       
        <?php } ?>
        
    </tbody>
</table>


<a name="" id="" class="btn btn-primary mb-2 " href="?controlador=empleados&accion=crear" role="button">Agregar Empleado</a>




