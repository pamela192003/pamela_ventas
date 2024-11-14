<?php
require_once('../model/comprasModel.php');
$tipo = $_REQUEST['tipo'];

$objCompras = new comprasModel();
if ($tipo=="registrar") {

    if ($_POST) {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $trabajador = $_POST['trabajador'];
    }
}


?>