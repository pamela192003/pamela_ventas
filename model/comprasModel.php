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
    public function registrarCompras($producto, $cantidad,$precio,$trabajador) {
        $sql = $this->conexion->query("CALL insertarCompras('{$producto}','{$cantidad}','{$precio}','{$trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    
}
