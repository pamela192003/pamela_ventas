<?php
require_once('../model/comprasModel.php');
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

            $id_producto = $arrCompras[$i]->id_producto;
            $r_producto = $objProducto->obtener_producto_id($id_producto);
            $arrCompras[$i]->producto=$r_producto;

            $id_trabajador = $arrCompras[$i]->id_trabajador;
            $r_trabajador = $objPersona->obtener_trabajador_id($id_trabajador);
            $arrCompras[$i]->trabajador=$r_trabajador;

            $opciones = '
            <a href="'.BASE_URL.'editar-compra/'.$id_compra.'"><i class="fas fa-edit btn btn-success btn-sm"></i></a>
                 <button onclick="eliminar_compra('.$id_compra.');"class="btn btn-warning btn-sm"><i class="fas fa-trash-alt"></i></button>
                 ';
            $arrCompras[$i]->options = $opciones;
            
        }
            $arr_Respuesta['status'] = true;
            $arr_Respuesta['contenido'] =  $arrCompras;
    }
    echo json_encode($arr_Respuesta); //convertir en formato -- 
}


if ($tipo == "registrar") {
    if ($_POST) {
        // Capturamos los datos enviados desde el formulario de compra
        $id_producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        // $fecha_compra = $_POST['fecha_compra']; 
        $id_trabajador = $_POST['trabajador'];

        // Validación de campos vacíos
        if ($id_producto == "" || $cantidad == "" || $precio == "" || 
           /*  $fecha_compra == "" || */ $id_trabajador == ""
        ) {
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacíos'
            );
        } else {
            $arrProducto = $objCompras->registrarCompras($id_producto, $cantidad, $precio, $id_trabajador);

            if ($arrProducto->id > 0) {
                 $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Compra registrada exitosamente' );

            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al registrar compra');
                }
            }
        
        echo json_encode($arr_Respuesta);
    
        }
    }

    if($tipo == "ver") {
        //print_r($_POST);
        $id_compra = $_POST['id_compra'];
        $arr_Respuesta = $objCompras->verCompras($id_compra);
       // print_r($arr_Respuesta);
       if (empty($arr_Respuesta)) {
           $response = array('status' => false, 'mensaje' => "ErroR¡¡ no hay informacion");
       }else{
        $response = array('status' => true, 'mensaje'=>"datos encontrados", 'contenido' => $arr_Respuesta);
       }
       echo json_encode($response);
    }
    
    if ($tipo == "actualizar") {
        $id_compra = $_POST['id_compra'];
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $id_trabajador = $_POST['trabajador'];
    
        if ($id_compra == "" || $id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta
    
        } else {
            $arrCompras = $objCompras->actualizarCompra($id_compra, $id_producto, $cantidad, $precio, $id_trabajador);
            if ($arrCompras->p_id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
    
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar compras');
            }
        }
        echo json_encode($arr_Respuesta);
    }
    
    if ($tipo == "eliminar") {
        //print_r($_POST);
        $id_compra = $_POST['id_compra'];
        $arr_Respuesta = $objCompras->eliminar_compra($id_compra);
        //print_r($arr_Respuesta);
        if (empty($arr_Respuesta)) {
            $response = array('status' => false);
        } else {
            $response = array('status' => true);
        }
        echo json_encode($response);
    }
?>