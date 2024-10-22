<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modelproducto
$objProducto = new ProductoModel();

if ($tipo=="registrar") {
    //print_r($_POST);
    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen = $_POST['imagen'];
        $proveedor = $_POST['proveedor'];
        if ($codigo=="" || $nombre=="" ||
        $detalle=="" || $precio=="" || $stock=="" || $categoria=="" || $imagen=="" || $proveedor=="") {
            //respuesta
            $arr_Respuesta = array('status'=>false,
            'mensaje'=>'Error, campos vacios');
        }else {
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor);
            }
        }
    }
?>