<?php

class vistaModelo{

    protected static function obtener_vista($vista){
       $palabras_permitidas =['usuarios', 'usuario', 'nuevo-usuario', 'inicio', 'producto', 'hoy', 'explorar', 'carrito', 'contacto', 'detalle-producto', 'fotografia', 'perfil', 'servicio', 'inicioUsuario', 'ajuste','hoyUsuario', 'explorarUsuario', 'ajustes' ];
       /*buscar en palabras permintidas y en nuestars vistas */
       if (in_array($vista,$palabras_permitidas) ) {
        if (is_file("./views/".$vista.".php")) {
            $contenido = "./views/".$vista.".php";
        }else {
            $contenido = "404";
        }
       }elseif ($vista=="login" || $vista=="index") {
        $contenido = "login";
       }else {
        $contenido = "404";
       }
       return $contenido;
    }
}

?>