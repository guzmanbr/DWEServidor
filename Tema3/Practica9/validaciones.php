<?php
/*
. Crea tu propio fichero de php que tenga las funciones de validación de formularios.
    ● Todos los campos tienen que ser validados, por tu librería
    ● Si hay alguno de los campos del formulario que no están correctos, se muestra
    un mensaje en rojo, diciendo que está vacío
    ● Los elementos que estén bien tienen que mantenerse
    ● El Combo no puede elegirse la primera opción
    ● Los check deben generarse dinámicamente
    ● El número obligatorio debe ser entre 0 y 100
    ● En la fecha obligatoria debe ser mayor de edad
    ● Validar el número mínimo (1) y máximo (3) de checks
    ● Subir una imagen

*/

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

function generaCheck(){
    
}











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

/******** Recuerda ************/
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



/************Validar****************/
function validarFormulario(&$errores){
   
    //Nombre
    if (textoVacio('nombre1')) {
        $errores['nombre1'] = "Nombre vacio";
    }
    //Apellido
    if (textoVacio('apellido1')) {
        $errores['apellido1'] = "Apellido vacio";
    }
    //Numero
    if (textoVacio('num1')) {
        $errores['num1'] = "Numero vacio";
    }
    //Fecha
    if (textoVacio('fecha')) {
        $errores['fecha'] = "Debe seleccionar una fecha";
    }
    //Radio
    if (radioVacio('opciones')) {
        $errores['opciones'] = "Debe seleccionar una opcion";
    }
    //Select
    if (selectVacio('selects')) {
        $errores['selects'] = "Debe seleccionar un select";
    }
    //Checke
    if (radioVacio('selects')) {
        $errores['aficion'] = "Debe seleccionar al menos una opcion";
    }
    //Telefono 
    if (textoVacio('telefono')) {
        $errores['telefono'] = "Numero de telefono vacio";
    }
    //Email esta vacio 
    if (textoVacio('email')) {
        $errores['email'] = "Email vacio";
    }
    //Contraseña esta vacio 
    if (textoVacio('contraseña')) {
        $errores['contraseña'] = "Contraseña vacia";
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