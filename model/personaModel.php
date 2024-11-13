<?php
require_once "../librerias/conexion.php";
 class PersonaModel{

    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal,$direccion, $rol, $password, $estado, $fecha_reg){
        $sql = $this->conexion->query("CALL insertarPersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}','{$direccion}','{$rol}','{$password}','{$estado}','{$fecha_reg}')");
        $sql = $sql->fetch_object();
        return $sql;
         }

//trabajador
    public function obtener_trabajador(){
        $arr_Respuesta = array();
        $Respuesta = $this->conexion->query("SELECT*FROM persona WHERE rol = 'trabajador'");

        while ($objeto = $Respuesta->fetch_Object()){
            array_push($arr_Respuesta, $objeto);
        }
    return $arr_Respuesta;
    }
 }
?>