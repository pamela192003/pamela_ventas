<?php
require_once('../model/comprasmodel.php');
require_once('../model/personaModel.php');
require_once('../model/productoModel.php');

$tipo  = $_REQUEST['tipo'];
//instancio la clase  productoModel

$objCompras = new ComprasModel();
$objProducto = new ProductoModel();
$objPersona = new PersonaModel();

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCompras = $objCompras->obtenerCompras();

    if (!empty($arrCompras)) {
        for ($i = 0; $i < count($arrCompras); $i++) {
            $id_compra = $arrCompras[$i]->id;
            $id_producto = $arrCompras[$i]->id_producto;
            $cantidad = $arrCompras[$i]->cantidad;
            $precio = $arrCompras[$i]->precio;
            $id_trabajador = $arrCompras[$i]->id_trabajador;

            $id_producto = $arrCompras[$i]->id;
            $r_producto = $objProducto->obtener_producto_id($id_producto);
            $arrCompras[$i]->producto=$r_producto;

            $id_trabajador = $arrCompras[$i]->id_trabajador;
            $r_trabajador = $objPersona->obtener_trabajador_id($id_trabajador);
            $arrCompras[$i]->trabajador=$r_trabajador;

            $opciones = '';
            $arrCompras[$i]->options = $opciones;
            
        }
            $arr_Respuesta['status'] = true;
            $arr_Respuesta['contenido'] =  $arrCompras;
    }
    echo json_encode($arr_Respuesta); //convertir en formato -- 
}


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