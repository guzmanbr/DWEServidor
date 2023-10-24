<?php

//Comprueba si el input esta vacio
function textoVacio ($name){
    if (empty($_REQUEST[$name])) {
        return true;
    }else {
        return false;
    }
}

//**********Radio***********

//Comprueba si el radio esta vacio o no
function radioVacio ($name){
    //si existe una opcion no esta vacio
    if (isset($_REQUEST[$name])) {
        return false;
    }else {
        return true;//devuelve true cuando esta vacio
    }
}
//recuerda el radio marcado
function recuerdaRadio($name,$value){
    if (enviado() && isset($_REQUEST[$name]) && $_REQUEST[$name] == $value) {
        echo 'checked';
    }
    //si hay algo marcado lo borra al pulsar borrar
    if (isset($_REQUEST['borrar'])) {
        echo '';
    }
}

//*********Check***********
//recuerda el checkbox marcado
function recuerdaCheck($name,$value){
    //si en el array existe el valor lo deja marcado
    if (enviado() && isset($_REQUEST[$name]) && in_array($value,$_REQUEST[$name])) {
        echo 'checked';
    }
    //si hay algo marcado lo borra al pulsar borrar
    if (isset($_REQUEST['borrar'])) {
        echo '';
    }
}

//************Select*************
//select vacio
function selectVacio ($name){
    //si existe una opcion no esta vacio
    if (isset($_REQUEST[$name]) && $_REQUEST[$name] != 0) {
        return false;
    }else {
        return true;//devuelve true cuando esta vacio
    }
}

function recuerdaSelect($name,$value){
    //si en el array existe el valor lo deja marcado
    if (enviado() && isset($_REQUEST[$name]) && $_REQUEST[$name] == $value) {
        echo 'selected';
    }
    //si hay algo marcado lo borra al pulsar borrar
    if (isset($_REQUEST['borrar'])) {
        echo '';
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
   
    //si nombre esta vacio se guarda el error nombre vacio en el array de errores
    if (textoVacio('nombre')) {
        $errores['nombre'] = "Nombre vacio";
    }
    //si apellido esta vacio se guarda en errores[]
    if (textoVacio('apellido')) {
        $errores['apellido'] = "Apellido vacio";
    }
    //Si no existe el radio se guarda un error
    if (radioVacio('genero')) {
        $errores['genero'] = "Debe seleccionar una opcion";
    }
    //Si no existe checked
    if (radioVacio('aficion')) {
        $errores['aficion'] = "Debe seleccionar al menos una opcion";
    }
    //Si no existe fehca
    if (textoVacio('fecha_n')) {
        $errores['fecha_n'] = "Debe seleccionar una fecha";
    }
    //Si no existe select
    if (selectVacio('equipos')) {
        $errores['equipos'] = "Debe seleccionar un equipo";
    }
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