<?php
    include_once "../modelo/Productos/ProductosModel.php";

    class ProductosController{
        //ver productos
        public function getProductos() {
            $obj=new ProductosModel();
            $sql="SELECT P.codigoProduc,P.nombre,P.precio,P.cantidad,C.nombreCate FROM producto P JOIN categoria C ON C.codigoCate=P.id_categoria";
            $producto= $obj->consultar($sql);
            include_once "../view/productos/consult.php";
        }

        public function getCreate(){

            $obj= new ProductosModel();
            $sql= "SELECT * FROM categoria WHERE id_estado=1";
            $categorias= $obj->consultar($sql);
            include_once "../view/Productos/create.php";
        }

        public function postCreate(){

            $obj= new ProductosModel();
            //dd($_POST);
            $nombre= $_POST['nombreP'];
            $precio= $_POST['precio'];
            $cantidad= $_POST['cantidad'];
            $id_categoria=$_POST['codigoCate'];

            $imagen =$_FILES['imagen']['name'];

            $ruta="img/$imagen";
            
            move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);

            $id= $obj->autoincremente("producto","codigoProduc");
            
            $sql="INSERT INTO producto VALUES($id,'$nombre',$precio,$cantidad,$id_categoria,'$ruta',1)";
            $ejecutar = $obj->insertar($sql);

            if ($ejecutar){
                redirect("Productos","Productos","getPrductos");
            }else{
                echo"No se pudo insertar el producto";
            }
        }
        public function filtro(){
            $obj= new ProductosModel();

            $buscar= $_POST['buscar'];

            $sql= "SELECT p.*,c.nombreCate FROM producto p, categoria c WHERE p.id_categoria= c.codigoCate  AND p.nombre LIKE '%$buscar%' OR c.nombreCate LIKE '%$buscar%'";
            $productos = $obj->consultar($sql);

            include_once '../view/productos/filtro.php';

        }

        
    }
?>