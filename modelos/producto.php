<?php

    class Producto{

        public $id;
        public $nombre;
        public $descripcion;
        public $categoria;
        public $stock;
        public $img;
        public $precio;

        public function __construct($id,$nombre,$descripcion,$categoria,$precio,$stock,$img){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->descripcion=$descripcion;
            $this->categoria=$categoria;
            $this->precio=$precio;
            $this->stock=$stock;
            $this->img=$img;
        }

        public static function consultar(){
            $ListaProducto=[];
            $conexionBD=BD::crearInstancia();
            $sql=$conexionBD->query("SELECT * FROM producto");

            foreach($sql->fetchAll() as $producto){
                $ListaProducto[]= new Producto($producto['id'],$producto['nombre'],$producto['descripcion'],$producto['categoria'],$producto['precio'],$producto['stock'],$producto['img']);
            }
            return $ListaProducto;
        }

        public static function crear($nombre,$descripcion,$categoria,$precio,$stock,$img){
            $conexionBD=BD::crearInstancia();
            $sql= $conexionBD->prepare("INSERT INTO producto(nombre,descripcion,categoria,precio,stock,img) VALUES(?,?,?,?,?,?)");
            $sql->execute(array($nombre,$descripcion,$categoria,$precio,$stock,$img));
        }

        public static function borrar($id){
            $conexionBD=BD::crearInstancia();
            $sql= $conexionBD->prepare("DELETE FROM producto WHERE id=?");
            $sql->execute(array($id));
        }

        public static function buscar($id){
            $conexionBD=BD::crearInstancia();
            $sql= $conexionBD->prepare("SELECT * FROM producto WHERE id=?");
            $sql->execute(array($id));
            $producto=$sql->fetch();
            return new Producto($producto['id'],$producto['nombre'],$producto['descripcion'],$producto['categoria'],$producto['precio'],$producto['stock'],$producto['img']);
        }

        public static function editar($id,$nombre,$descripcion,$categoria,$precio,$stock,$img){
            $conexionBD=BD::crearInstancia();
            $sql= $conexionBD->prepare("UPDATE producto SET nombre=?, descripcion=?,categoria =?,precio=?,stock=?,img=? WHERE id=?");
            $sql->execute(array($nombre,$descripcion,$categoria,$precio,$stock,$img,$id));
        }
    }

?>