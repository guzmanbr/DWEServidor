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

function sesionIniciada(){
    if (!isset($_SESSION['usuario'])) {
        $_SESSION['error'] = "No tiene sesion iniciada.<br>";
        header('Location: ./login.php');
        exit;
    }
}

function permisosPagina($url){
    //si la pagina no esta en el array muestra el mensaje 
    if (!in_array($url,$_SESSION['usuario']['paginas'])) {        
        $_SESSION['error'] = "No tiene permiso para ir a la pagina ".$url."<br>";
        header('Location: ./homeUser.php');
        exit;
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