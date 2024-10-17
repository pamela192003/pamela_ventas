<?php

class vistaModelo{

    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuarios','nuevo-usuario','usuario', 'producto','hombres','carrito','nuevo','contacto','detalles-producto',
    'factura-pago','kids','login','perfil','registrarse','sobre-nosotros','nuevo-productos']; //carpetas de html
        if(in_array($vista, $palabras_permitidas)){
            if (is_file("./views/".$vista.".php")) {  //busca si el archivo existe o no existe dentro de las vistas
                $contenido = "./views/".$vista.".php";
                
            }else{
                $contenido = "404"; // si esta permitido
            }

        }elseif($vista=="login" || $vista=="index"){
            $contenido = "login";

        }else{
            $contenido = "404"; // no esta permitido
        }
        return $contenido;
    }
}
?>