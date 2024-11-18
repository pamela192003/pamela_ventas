<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloProducto
$objProducto = new ProductoModel();

if ($tipo=="registrar"){
    /*print_r($_POST);
    echo $_FILES['imagen']['name'];*/

    $archivo = $_FILES['imagen']['tmp_name'];
    $destino = './assets/img_productos/';

    
    $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
   if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen = 'imagen';
        $proveedor = $_POST['proveedor'];
        if($codigo=="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" ||  $imagen=="" || $proveedor==""){
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta

        }else {
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor);

            if ($arrProducto->id>0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
                //CARGAR ARCHIVO
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

                $nombre = $arrProducto->id.".".$tipoArchivo;
                if (move_uploaded_file($archivo,$destino.$nombre)) {
                    $arr_imagen = $objProducto->actualizar_imagen($id,$nombre);
                }else {
                        $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso, error al subir imagen');
                    }
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
if ($tipo=="listar") {
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Productos = $objProducto->obtener_productos();
    if (!empty($arr_Productos)) {
        //recoremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Productos); $i++) { 
            $id_categoria = $arr_Productos[$i]->id;
            $categoria = $arr_Productos[$i]->nombre;
            $opciones = '';
            $arr_Productos[$i]->options = $opciones;
        }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Productos;
 }
    echo json_encode($arr_Respuesta);
}








if ($tipo=="ver") {
    # code...
}
if ($tipo=="actualizar") {
    # code...
}
?>