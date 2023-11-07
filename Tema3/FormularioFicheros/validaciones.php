<?php

//Comprueba si el input esta vacio
function textoVacio ($name){
    if (empty($_REQUEST[$name])) {
        return true;
    }else {
        return false;
    }
}


//comprueba si se ha enviado el furmulario, si se ha clicado el boton enviar
function enviado(){
    if (isset($_REQUEST['enviar'])) {
        return true;
    }else {
        return false;
    }
}

//Funcion que muestra el error si este existe en el array de errores
function errores($errores,$name){
    if (isset($errores[$name])) {
        echo $errores[$name];
    }
}

/****Recuerda inputs */
//Guarda lo que hay escrito en el input despues de enviar, tambien borra lo que hay escrito si se pulsa borrar
function recuerda($name){
    //si se ha enviado y  no esta vacio, se guarda lo que hay escrito
    if (enviado() && !empty($_REQUEST[$name])) {
        echo $_REQUEST[$name];
    }
    //si hay algo escrito lo borra al pulsar borrar
    if (isset($_REQUEST['borrar'])) {
        echo '';
    }
}




function validarFormulario(&$errores){
   
    //si fichero esta vacio
    if (textoVacio('fichero')) {
        $errores['fichero'] = "Fichero vacio";
    }            
    
    if (count($errores) == 0) {
        return true;
    }else {
        return false;
    }
}



?>