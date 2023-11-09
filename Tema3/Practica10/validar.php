<?php

//Vacio
    function textoVacio ($name){
        if (empty($_REQUEST[$name])) {
            return true;
        }else {
            return false;
        }
    }

    function enviado(){
        if (isset($_REQUEST['leer']) || isset($_REQUEST['editar']) || isset($_REQUEST['volver']) || isset($_REQUEST['guardar']) ) {
            return true;
        }else {
            return false;
        }
    }

//Existe
    function existe($name){
        if (isset($_REQUEST[$name])) {
            return true;
        }else {
            return false;
        }
    }

//Leer Fichero
function leer($fichero){
    if (file_exists($fichero)) {
        //abrir, si hay problema al abrir mensaje error, sino lo lee
        if(!$fp = fopen($fichero,'r')){
            echo "Ha habido un problema al abrir el fichero";
        }else {
            if (filesize($fichero)==0) {
                echo "El fichero esta vacio";
            }else{
                //paso la tuberia y el tamaño que quiero leer, y lo guardo en la variable asi lee linea a linea
                while ($leido = fgets($fp,filesize($fichero))) {
                    echo $leido;
                }
                fclose($fp);
            }
        }

    }else{
        echo "No existe";
    }
}

//Guardar
function guardar($fichero,$texto){

    $fp = fopen($fichero,'w');
    $longitud = strlen($texto);//longitud del texto
    //le paso la tuberia, el texto a escribir y la longitud de lo que voy a escribir

    if (!fwrite($fp,$texto,$longitud)) {
        echo "Error al escribir";
    }else {
        
    }
    fclose($fp);

}




    




?>