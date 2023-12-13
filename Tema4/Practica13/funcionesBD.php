<?

//Existe
function existe($name){
    if (isset($_REQUEST[$name])) {
        return true;
    }else {
        return false;
    }
}
function enviado(){
    if (isset($_REQUEST['crear']) || isset($_REQUEST['leer']) || isset($_REQUEST['insertar'])) {
        return true;
    }else {
        return false;
    }
}


function crearBase($con,$BD){

    try {
        // Conectamos a la BBDD
        $con -> connect(IP,USER,PASS);
        // Obtenemos el contenido del fichero sql
        $script = file_get_contents($BD);
        // Lee el contenido del script
        $con -> multi_query($script);

        // Comprobamos si hay un error de sintaxis y no lo muestra
        do {
            $con -> store_result();
            if (!$con -> next_result()) {
                break;
            }
        } while(true);
        // Cerramos la conexion
        $con -> close();
        return true;

    } catch (\Throwable $th) {
        $sql ="drop database productos";
        $con -> query($sql);
        switch ($th -> getCode()) {
            case '1062':
                echo "Ha introducido el mismo id";
                break;
            case '111360':
                echo "El número de campos introducido no coincide";
                break;            
            default:
                echo $th -> getMessage();
                break;
        }
        mysqli_close($con);
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
    if (textoVacio('precio')) {
        $errores['precio'] = "Precio vacio";
    }
    if (textoVacio('fecha')) {
        $errores['fecha'] = "Fecha vacia";
    }
         
    
    if (count($errores) == 0) {
        return true;
    }else {
        return false;
    }
}

