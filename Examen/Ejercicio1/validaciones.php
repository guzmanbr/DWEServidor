<?

//comprueba que el campo de texto no este vacio
function textoVacio ($name){
    if (empty($_REQUEST[$name])) {
        return true;
    }else {
        return false;
    }
}

//Guarda lo que hay escrito en el input
function recuerda($name){
    //si se ha enviado y  no esta vacio, se guarda lo que hay escrito
    if (enviado() && !empty($_REQUEST[$name])) {
        echo $_REQUEST[$name];
    }
}


//comprueba si se ha enviado el furmulario, si se ha clicado el boton registrar
function enviado(){
    if (isset($_REQUEST['registrar'])) {
        return true;
    }else {
        return false;
    }
}

//muestra el error si este existe en el array de errores
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

function generarRadio($arrayGeneros){
    foreach ($arrayGeneros as $genero) {
        echo " <label for='mujer'>Mujer <type='radio' name='genero' id='idMujer' value=".$genero."></label>";
    }

}




/************Validar****************/
function validarFormulario(&$errores){

    
    //Id
    if (textoVacio('idPelicula')) {
        $errores['idPelicula'] = "Id vacio. ";
    }elseif (!validarExpresionRegular('/^\d{4}[A-Z]{2}\-\d{3}$/', 'idPelicula')) {
        $errores['idPelicula'] = "No cumple el patron indicado.";
    }

    //titulo
    if (textoVacio('titulo')) {
        $errores['titulo'] = "Titulo vacio. ";
    }

    //director
    if (textoVacio('director')) {
        $errores['director'] = "Director vacio. ";
    }
    
    //año
    if (textoVacio('año')) {
        $errores['año'] = "Año vacio. ";
    }elseif (!validarExpresionRegular('/^\d{4}$/', 'año')) {
        $errores['año'] = "No cumple el patron indicado.";
    }

    //actores
    if (textoVacio('actores')) {
        $errores['actores'] = "Actores vacio. ";
    }elseif (!validarExpresionRegular('/^[A-Za-z]{0,}(\,[A-Za-z]{0,})*$/', 'actores')) {
        $errores['actores'] = "No cumple el patron indicado.";
    }

    //duracion
    if (textoVacio('duracion')) {
        $errores['duracion'] = "Duracion vacio. ";
    }elseif (!validarExpresionRegular('/^\d{2}\:\d{2}\:\d{2}$/', 'duracion')) {
        $errores['duracion'] = "No cumple el patron indicado.";
    }

    //Sinopsis
    if (textoVacio('sinopsis')) {
        $errores['sinopsis'] = "Sinopsis vacia. ";
    }elseif (!validarExpresionRegular('/^.{50,}$/', 'sinopsis')) {
        $errores['sinopsis'] = "No cumple el patron indicado.";
    }
       
    //si no hay ningun error en el array es valido  y retorna true
    if (count($errores) == 0) {
        return true;
    }else {
        return false;
    }
}


//le paso el texto que quiero guardar, que son todos los datos de la pelicula, los cuales guardo en la funcion guardar
function escribirFichero($texto){

    //abrir, si hay problema al abrir mensaje error, sino 
    //si no existe creo el fichero y si existe lo sobrescribe al usar "a"
    if(!$fp = fopen('peliculas.txt','a')){
        echo "Ha habido un problema al abrir el fichero";
    }else {
        $texto = "\n".$texto;
        //paso la tuberia y el tamaño que quiero leer, y lo guardo en la variable asi lee linea a linea
        if (!fwrite($fp,$texto,strlen($texto))) {
            echo "Error escribir";
        }
        fclose($fp);
    }
    
}


//Creo una funcion para guardar todos los datos de la pelicula 
function guardarDatos() {
    
    $datos ="";
    $datos ="\nid:". $_REQUEST['idPelicula'];
    $datos =$datos."\nTitulo:". $_REQUEST['titulo'];
    $datos =$datos."\nDirector:". $_REQUEST['director'];
    $datos =$datos."\nAño:". $_REQUEST['año'];
    $datos =$datos."\nActores:". $_REQUEST['actores'];
    $datos =$datos."\nDuracion:". $_REQUEST['duracion'];
    $datos =$datos."\nSinopsis:". $_REQUEST['sinopsis'];

    return $datos;
}


//funcion para guardar en xml
function escribir(){

    $xml = new SimpleXMLElement('<peliculas></peliculas>');//creo un objeto xml con su etiqueta principal  
    //creo un juego y lo guardo en una variable
    $pelicula = $xml->addChild('pelicula');
    $pelicula->addChild('id',$_REQUEST['idPelicula']);//
    $pelicula->addChild('titulo',$_REQUEST['titulo']);//
    $pelicula->addChild('director',$_REQUEST['director']);//
    $pelicula->addChild('año',$_REQUEST['año']);//
    $pelicula->addChild('actores',$_REQUEST['actores']);//
    $pelicula->addChild('duracion',$_REQUEST['duracion']);
    $pelicula->addChild('sinopsis',$_REQUEST['sinopsis']);
      
    //el objeto guardo en un fichero xml
    //si ya existe se sobrescribe //hay que dar permisos a la carpeta sudo...
    $xml->asXML('peliculas.xml');
    
    }


?>