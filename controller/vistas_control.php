<?php
/*conectar la */
require_once "./model/vistas_model.php";

class vistasControlador extends vistaModelo{
    public function obtenerPlantillaControlador(){
        return require_once "./views/plantilla.php";
    }
    public function obtenerVistaControlador (){
        /*recive el views del archivo .htaccess*/ 
        if ( isset($_GET['views'])) {
            /*extrae solo la lista despues de el '/' */
            $ruta  = explode("/",$_GET['views']);
            /*almacena en resultado en respuesta */
            $respuesta = vistaModelo::obtener_vista($ruta[0]);
        }
        else {
            $respuesta = "login";
        }
        return $respuesta;
    }
}

?>