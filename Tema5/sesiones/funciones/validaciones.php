<?php

//comprueba si se ha enviado el furmulario, si se ha clicado el boton enviar
function enviado(){
    if (isset($_REQUEST['enviar'])) {
        return true;
    }else {
        return false;
    }
}

//Comprueba si el input esta vacio
function textoVacio ($name){
    if (empty($_REQUEST[$name])) {
        return true;
    }else {
        return false;
    }
}


/****Recuerda inputs */
//Guarda lo que hay escrito en el input despues de enviar, tambien borra lo que hay escrito si se pulsa borrar
function recuerda($name){
    //si se ha enviado y  no esta vacio, se guarda lo que hay escrito
    if (enviado() && !empty($_REQUEST[$name])) {
        echo $_REQUEST[$name];
    }
}


   





?>