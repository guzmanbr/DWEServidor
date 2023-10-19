<?php

function textoVacio ($name){
    if (empty($_REQUEST[$name])) {
        return true;
    }else {
        return false;
    }
}

//comprueba si se ha enviado el furmulario, si se ha clicado el boton
function enviado(){
    if (isset($_REQUEST['enviar'])) {
        return true;
    }else {
        return false;
    }
}


function errores($errores,$name){
    if (isset($errores[$name])) {
        echo $errores[$name];
    }
}


function recuerda($name){

    //si se ha enviado y  no esta vacio, se guarda lo que hay escrito
    if (enviado() && !empty($_REQUEST[$name])) {
        echo $_REQUEST[$name];
    }
    //si hay algo escrito lo borra al pulsar borrar
    if (isset($_REQUEST['borrar'])) {
        echo "";
    }
}





?>