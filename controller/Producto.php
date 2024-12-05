<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloProducto
$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();

if ($tipo=="listar") {
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Productos = $objProducto->obtener_productos();
    if (!empty($arr_Productos)) {
        //recoremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Productos); $i++) { 
            $id_categoria = $arr_Productos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categoria($id_categoria);
            $arr_Productos[$i]->categoria=$r_categoria;

            $id_proveedor = $arr_Productos[$i]->id_proveedor;
            $r_proveedor = $objPersona->obtener_proveedor_id($id_proveedor);
            $arr_Productos[$i]->proveedor=$r_proveedor;

            $id_producto = $arr_Productos[$i]->id;
            $nombre = $arr_Productos[$i]->nombre;
            $opciones = '<a href="'.BASE_URL.'editar-producto/'.$id_producto.'">Editar</a><button onlick="eliminar_producto('.$id_producto.')">Eliminar</button>';
            $arr_Productos[$i]->options = $opciones;
        }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Productos;
 }
    echo json_encode($arr_Respuesta);
}


if ($tipo=="registrar"){
    /*print_r($_POST);
    echo $_FILES['imagen']['name'];*/

    $archivo = $_FILES['imagen']['tmp_name'];
    $destino = '../assets/img_productos/';
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
            $archivo = $_FILES['imagen']['tmp_name'];
            $destino = '../assets/img_productos/';
            $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor,$tipoArchivo);


            if ($arrProducto->id_n>0) {
                $newid = $arrProducto -> id_n;
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
                $nombre = $arrProducto->id.".".$tipoArchivo;
                
                if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
                } else {
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
                }
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if ($tipo == "ver") {
    //print_r($_POST);
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->verProducto($id_producto);
   // print_r($arr_Respuesta);
   if (empty($arr_Respuesta)) {
    $response = array('status' => false, 'mensaje'=>"Error, no hay informacion");
   }else {
    $response = array('status' => true, 'mensaje'=>"datos encontrados",'contenido'=> $arr_Respuesta);
   }
   echo json_encode($response);
}

if ($tipo=="actualizar") {
    # code...
}
if ($tipo=="eliminar") {
    # code...
}
?>