<?php
require_once "../librerias/conexion.php";
 class PersonaModel{

    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal,$direccion, $rol, $password){
        $sql = $this->conexion->query("CALL insertarPersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}','{$direccion}','{$rol}','{$password}')");
        $sql = $sql->fetch_object();
        return $sql;
         }
         public function buscarPersonaPorDNI($dni){
            $sql = $this->conexion->query(" SELECT * FROM persona WHERE nro_identidad='{$dni}'");
            $sql = $sql->fetch_object();
            return $sql;
         }
         public function obtener_personas()
         {
             $arrRespuesta = array();
             $respuesta = $this->conexion->query(" SELECT * FROM persona WHERE rol ='trabajador'");
             while ($objeto = $respuesta->fetch_object()) {
                 array_push($arrRespuesta, $objeto);
             }
             return $arrRespuesta;
         }

         public function obtener_proveedor(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query( "SELECT * FROM persona WHERE rol='proveedor'");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta, $objeto);
            }
            return  $arrRespuesta;
        }
        public function obtener_proveedor_id($id){
            $respuesta = $this->conexion->query("SELECT * FROM persona WHERE id='{$id}'");
            $objeto = $respuesta->fetch_object();
            return $objeto;
        }
        public function obtenerPersona(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query("SELECT * FROM persona");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta,$objeto);
                
            }
            return $arrRespuesta;
        }
        public function obtener_trabajador_id($id){
            $respuesta = $this->conexion->query("SELECT *FROM persona WHERE id='{$id}'");
            $objeto = $respuesta->fetch_object();
            return $objeto;
        }

        public function verPersona($id){
            $sql = $this->conexion->query("SELECT * FROM persona WHERE id='{$id}'");
            $sql = $sql->fetch_object();
            return $sql;
         }
         public function actualizarPersona($id, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia,
         $distrito, $cod_postal, $direccion, $rol){
            $sql = $this->conexion->query("CALL actualizarPersona('{$id}','{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}'
            ,'{$distrito}','{$cod_postal}','{$direccion}','{$rol}')");
            $sql = $sql->fetch_object();
            return $sql;
        }
        
        public function eliminarPersona($id){
            $sql = $this->conexion->query("CALL eliminarPersona('{$id}')");
            $sql = $sql->fetch_object();
            return$sql;
        
        }
        
 }
?>