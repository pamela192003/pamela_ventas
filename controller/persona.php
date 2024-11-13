<?php
require_once('../model/personaModel.php');
$tipo=$_REQUEST['tipo'];
$objPersona = new PersonaModel();
if ($tipo== "registrar") {
    if ($_POST) {
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $fecha_reg = $_POST['fecha_reg'];
        
        if($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo=="" || $departamento=="" || $provincia=="" ||  $distrito=="" || $cod_postal==""
        || $direccion=="" || $rol=="" || $password=="" || $estado=="" || $fecha_reg==""){
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta

        }else {
            $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, 
            $direccion, $rol, $password, $estado, $fecha_reg);

            if ($arrPersona->id>0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
                //CARGAR ARCHIVO
             /*   $archivo = $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

                $nombre = $arrProducto->id.".".$tipoArchivo;
                if (move_uploaded_file($archivo,$destino.$nombre)) {
                    $arr_imagen = $objProducto->actualizar_imagen($id,$nombre);
                }else {
                        $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso, error al subir imagen');
                    }*/
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}


?>