<?php

//Texto vacio
function textoVacio ($name){
    if (empty($_REQUEST[$name])) {
        return true;
    }else {
        return false;
    }
}

//FICHERO VACIO
function existeFichero($name){
    if (isset($_FILES[$name])) {
        return true;
    }else {
        return false;
    }
}

//Enviado
function enviado(){
    if (isset($_REQUEST['enviar'])) {
        return true;
    }else {
        return false;
    }
}

//Errores
function errores($errores,$name){
    if (isset($errores[$name])) {
        echo $errores[$name];
    }
}

//Validar expresion
function validarExpresionRegular($expresion, $name) {
    if (preg_match($expresion, $_REQUEST[$name])) 
        return true;
    
    return false;
}


/*****DNI********/
function validarDni() {
    //creo variable con el dni
    $dniForm=$_REQUEST["dni"];
    //seleciono solo la letra
    $letraForm = substr($dniForm,8);
    //seleciono solo los numeros
    $numForm = substr($dniForm,0,8);
    $valor= (int) ($numForm / 23);
    $valor *= 23;
    $valor= $numForm - $valor;
    $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
    $letra= substr ($letras, $valor, 1);
    //compruebo si es la letra correcta
    if($letra==$letraForm){
        return true;
    }else{
        return false;
    }
}

/****MAYOR EDAD****/
function mayorEdad(){
    //pongo el mismo formato en la fecha del formulario y en la actual
    $fecha=date("Y-m-d",strtotime($_REQUEST['fecha']));
    $hoy=date("Y-m-d");
    //creo objeto de ambas fechas para poder realizar la resta
    $fecha2 = new Datetime($fecha);
    $hoy2 = new Datetime($hoy);
    //resto las fechas 
    $diferencia= $hoy2->diff($fecha2);
    //hago que la diferencia este en años
    $edad = $diferencia->y;
    //compruebo que la edad sea superior o igual a 18
    if ($edad >=18){
        return true;
    }
    return false;
}

/****Contraseñas****/
function comprobarContraseñas(){
    $pas1 = $_REQUEST['pass1'];
    $pas2 = $_REQUEST['pass2'];
    if ($pas1 == $pas2) {
        return true;
    }
    return false;
}

/******Subir fichero********/

function subirFichero($fichero){

    $ruta = '/var/www/html/DWEServidor/Tema3/Practica9/imagenes/';//guardo la ruta donde quiero que se guarde
    $ruta .= basename($_FILES[$fichero]['name']);//le sumo a la ruta el nombre del fichero

    if (move_uploaded_file($_FILES[$fichero]['tmp_name'],$ruta)) {//al fichero con nombre temporal,tmp_name, lo muevo a la ruta que puse antes
        //echo"Archivo subido";
    }else {
        echo "Error al subir el archivo";
    }

}


/******** Recuerda *******/
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
        $errores['nombre1'] = "Nombre vacio. ";
    }elseif (!validarExpresionRegular('/^[a-z A-Z]{3,}$/', 'nombre1')) {
        $errores['nombre1'] = "Minimo 3 caracteres.";
    }

    //Apellido
    if (textoVacio('apellido1')) {
        $errores['apellido1'] = "Apellido vacio. ";
    }elseif (!validarExpresionRegular('/^[a-z A-Z]{3,}\s[a-z A-Z]{3,}$/', 'apellido1')) {
        $errores['apellido1'] = "Mínimo 3 caracteres para el primer apellido, un espacio y mínimo 3 caracteres el segundo.";
    }

    //Contraseña1 esta vacio 
    if (textoVacio('pass1')) {
        $errores['pass1'] = "Contraseña vacia";
    }elseif (!validarExpresionRegular('/[A-Z]{1,}[a-z]{1,}[0-9]{1,}/', 'pass1')) {
        $errores['pass1'] = "Al menos 1 Mayúscula, 1 minúscula y 1 número";
    }

    //Contraseña2 esta vacio 
    if (textoVacio('pass2')) {
        $errores['pass2'] = "Contraseña vacia";
    } elseif (!comprobarContraseñas()) {
        $errores['pass2'] = "La contraseña no coincide con la anterior";
    }

    //Fecha
    if (textoVacio('fecha')) {
        $errores['fecha'] = "Debe escribir una fecha. ";
    }elseif (!validarExpresionRegular('/^\d{1,2}\-\d{1,2}\-\d{4}$/', 'fecha')) {
        $errores['fecha'] = "Escribir con formato dd-mm-yy. ";
    }elseif (!mayorEdad()) {
        $errores['fecha'] = "Menor de edad.";
    }
   
    //Apellido
    if (textoVacio('dni')) {
        $errores['dni'] = "Apellido vacio. ";
    }elseif (!validarExpresionRegular('/^\d{8}[A-Z]{1}/', 'dni')) {
        $errores['dni'] = "Formato no valido de DNI, 11111111A";
    }elseif (!validarDni()) {
        $errores['dni'] = "El DNI no existe";
    } 

    //Email esta vacio 
    if (textoVacio('email')) {
        $errores['email'] = "Email vacio. ";
    }elseif (!validarExpresionRegular('/^\w{1,}\@\D{1,}\.\D{2,}$/', 'email')) {
        $errores['email'] = "1 o más caracteres, @, 1 o más caracteres, . y 2 o más caracteres.";
    }

    //si fichero esta vacio
    if (empty($_FILES['fichero']['name'])) {
        $errores['fichero'] = "Fichero vacio";
    }elseif (!preg_match('/[jpg|png|bmp]$/', $_FILES['fichero']['name'])) {
        $errores['fichero'] = "Formato de fichero incorrecto.";
    }        
    
    if (count($errores) == 0) {
        return true;
    }else {
        return false;
    }
}




function mostrarDatos() {

    echo "<h1>Datos del formulario: </h1>";

    echo "<br><br>Nombre: " . $_REQUEST['nombre1'];

    echo "<br><br>Apellidos: " . $_REQUEST['apellido1'];

    echo "<br><br>Contraseña: " . $_REQUEST['pass1'];

    echo "<br><br>Fecha: " . $_REQUEST['fecha'];

    echo "<br><br>DNI: " . $_REQUEST['dni'];

    echo "<br><br>Email: " . $_REQUEST['email'];

    echo '<br><p><img src="imagenes/'.$_FILES['fichero']['name'].'"></p>';
}



?>