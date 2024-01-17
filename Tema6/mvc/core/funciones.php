<?

//Comprueba si el input esta vacio
function textoVacio ($name){
    if (empty($_REQUEST[$name])) {
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


function validarFormulario(&$errores){
   
    //si nombre esta vacio se guarda el error nombre vacio en el array de errores
    if (textoVacio('nombre')) {
        $errores['nombre'] = "Nombre vacio";
    }
    //si pass esta vacio se guarda en errores[]
    if (textoVacio('pass')) {
        $errores['pass'] = "Pass vacio";
    }   
    
    if (count($errores) == 0) {
        return true;
    }else {
        return false;
    }
}

function validado(){
    if (isset($_SESSION['usuario'])) {
        return true;
    }else {
        return false;
    }
}

function passIgual($pass1,$pass2){
    if ($pass1!==$pass2) {
        $errores['igual'] = "Las contraseñas no coinciden";
        return false;
    }else{
        return true;
    }
}