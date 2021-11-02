<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../vistas/empleados/img/wheelbarrow_118344.ico" type="image/x-icon">
  <title>Aplicacion web</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <!doctype html>
  <html lang="en">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container w-75">

      <a class="navbar-brand" href="?controlador=paginas&accion=inicio"><i class="fas fa-shipping-fast "></i> T-GESTIONA</a>
      <div class="collapse navbar-collapse">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio">Inicio</a>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administrar
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">


              <li><a class="dropdown-item" href="?controlador=productos&accion=inicio">Productos</a></li>
              <li><a class="dropdown-item" href="?controlador=empleados&accion=inicio">Empleados</a></li>
            </ul>
          </li>

          <!--menu dropdown dark-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown" aria-expanded="false">
              Reportes
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a href="" class="dropdown-item">empleados</a></li>
              <li><a href="" class="dropdown-item">productos</a></li>
            </ul>
          </li>


        </ul>

        <form class="d-flex ms-5 me-5 w-75 input-group flex-nowrap" action="" method="POST">
          <input class="form-control " name="id" type="search" placeholder="buscar en el almacen" aria-label="Search">

          <button class="btn btn-warning" type="submit" value="buscar"><i class="fas fa-search"></i></button>
        </form>


      </div>


      <form class="d-flex ">
        <a class="btn btn-success me-2 " href="?controlador=empleados&accion=sesion" type="submit">Iniciar sesion</a>

      </form>

    </div>
  </nav>


  <div class="container w-75  mt-4">
    <div class="row">
      <div class="col-12">
        <?php include_once("controladores/controlador_" . $controlador . ".php");
        $objControlador = "Controlador" . ucfirst($controlador);
        $controlador = new $objControlador();
        $controlador->$accion();

        ?>
      </div>

    </div>

  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/f82dcd074a.js"></script>

</body>

</html>