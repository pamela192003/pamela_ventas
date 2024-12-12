<?php

require_once "../librerias/conexion.php";

class ComprasModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCompras($id_producto, $cantidad, $precio, $id_trabajador) {
        $sql = $this->conexion->query("CALL insertarCompras('{$id_producto}', '{$cantidad}', '{$precio}', '{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    
    public function obtener_productos()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM producto");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function obtenerCompras(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM compras WHERE estado = 1");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
            
        }
        return $arrRespuesta;
    }

    public function verCompras($id){
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
     }
     public function actualizarCompra($id, $id_producto, $cantidad, $precio, $id_trabajador){
        $sql = $this->conexion->query("CALL actualizarCompras('{$id}','{$id_producto }','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function eliminar_compra($id){
        $sql = $this->conexion->query("CALL eliminarCompras('{$id}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

}

?>