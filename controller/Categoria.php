<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria model
$objCategoria = new CategoriaModel();

if ($tipo=="registrar") {
    if ($_POST) {
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    
    if ($nombre == "" || $detalle == "") {
        $arr_Respuesta = array('status'=>false,'mensaje'=>'error , los campos estan vacios');
        } else {
            $arr_Categorias = $objCategoria->registrarCategoria($nombre, $detalle);
            if ($arr_Categorias->id>0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar categoria');
            }
            echo json_encode($arr_Respuesta);
    }
}
}


if ($tipo=="listar") {
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {
        //recoremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Categorias); $i++) { 
            $id_categoria = $arr_Categorias[$i]->id;
            $categoria = $arr_Categorias[$i]->nombre;
            $opciones = '';
            $arr_Categorias[$i]->options = $opciones;
        }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = 
    $arr_Categorias;
 }
    echo json_encode($arr_Respuesta);
}

?>