<?php

include_once("modelos/producto.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorProductos
{

    public function inicio()
    {

        $producto = Producto::consultar();

        include_once("vistas/productos/inicio.php");
    }

    public function crear()
    {
        if ($_POST) {
            print_r($_POST);
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $img = $_POST['imagen'];

            Producto::crear($nombre, $descripcion, $categoria, $precio, $stock, $img);
            header("Location:./?controlador=productos&accion=inicio");
        }
        include_once("vistas/productos/crear.php");
    }

    public function editar()
    {

        if ($_POST) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $img = $_POST['img'];
            Producto::editar($id, $nombre, $descripcion, $categoria, $precio, $stock, $img);
            header("Location:./?controlador=productos&accion=inicio");
            //print_r($_POST);
        }

        $id = $_GET['id'];
        $producto = Producto::buscar($id);
        include_once("vistas/productos/editar.php");
    }

    public function borrar()
    {
        print_r($_GET);
        $id = $_GET['id'];
        Producto::borrar($id);
        header("Location:./?controlador=productos&accion=inicio");
    }

    public function buscar()
    {
        if ($_GET) {
            print_r($_GET);
            
            
        }
        include_once("vistas/productos/buscar.php");
    }
}
