<?php
require_once('../model/comprasmodel.php');

$tipo  = $_REQUEST['tipo'];
//instancio la clase  productoModel

$objCompras = new ComprasModel();



if ($tipo == "registrar") {

    if ($_POST) {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $trabajador = $_POST['trabajador'];

        if ( $producto == "" || $cantidad == "" || $precio == "" || $trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
        } else {
            $arrCompras = $objCompras->registrarCompras($producto,$cantidad,$precio,$trabajador);

            if ($arrCompras->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Compra registrado con exito');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar Compras');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
?>