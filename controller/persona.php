<?php
require_once('..model/personaModel.php');
$tipo=$_REQUEST['tipo'];
$objPersona = new PersonaModel();
$objPersona = new TrabajadorModel();
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
        || $direccion="" || $rol="" || $password=="" || $estado=="" || $fecha_reg==""){
            $arr_Respuesta = array('status'=>false,'mensaje$nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, 
        $direccion, $rol, $password, $estado, $fecha_reg'=>'Error, campos vacios'); //respuesta

        }else {
            $arrPersona = $objPersona->registrarPersona();
            echo jso_encode($arr_Respuesta);
                }
            }
          }

          if ($tipo== "listar_trabajador") {
                $arr_Respuesta = array('status'=>false, 'contenido'=>'');
                $arr_trabajador = $objtrabajador->obtener_trabajador();
                if (!empty($arr_trabajador)) {

                   for ($i=0; $i < count($arr_trabajador); $i++) {
                    $id_persona = $arr_trabajador[$i]->id;
                    $trabajador = $arr_trabajador[$i]->razon_social;
                    $opciones = '';
                    $arr_trabajador[$i]->options = $arr_trabajador;
                   }
                   $arr_Respuesta['status'] = true;
                   $arr_Respuesta['contenido'] = $arr_trabajador;
                   }
                   echo json_encode($arr_Respuesta)
              }
?>