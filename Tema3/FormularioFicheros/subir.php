<?php

//Si se ha subido algun archivo
if (count($_FILES)!= 0) {
    echo "<pre>";
    print_r($_FILES);//muestro los datos del pdf
    echo "</pre>";
    //$ruta = '/var/www/html/DWEServidor/Tema3/';//guardo la ruta donde quiero que se guarde

    $numFicheros = count($_FILES['ficheros']['name']);//numero de archivos que hay en el array

    echo "Hay". $numFicheros;

    foreach($_FILES['ficheros']['tmp_name'] as $key => $tmp_name){

        $ruta = '/var/www/html/DWEServidor/Tema3/';//guardo la ruta donde quiero que se guarde

        $name = $_FILES['ficheros']["name"][$key];//nombre del fichero
        $tmp = $_FILES['ficheros']["tmp_name"][$key];//nombre del temporal
        
        $ruta .= $name;//le sumo a la ruta el nombre del fichero
        if (move_uploaded_file($tmp,$ruta)) {//al fichero con nombre temporal,tmp_name, lo muevo a la ruta que puse antes
           echo"Archivo subido";
        }else {
            echo "Error al subir el archivo";
        }
    }

    //Forma con for

    // for($i=0;$i<$numFicheros;$i++){

    //     $ruta = '/var/www/html/DWEServidor/Tema3/';//guardo la ruta donde quiero que se guarde
    //     $name =  $_FILES['ficheros']["name"][$i];//nombre del fichero
    //     $tmp = $_FILES['ficheros']["tmp_name"][$i];//nombre del temporal
    //     $ruta .= $name;//le sumo a la ruta el nombre del fichero

    //     if (move_uploaded_file($tmp,$ruta)) {//al fichero con nombre temporal,tmp_name, lo muevo a la ruta que puse antes
    //        echo"Archivo subido";
    //     }else {
    //         echo "Error al subir el archivo";
    //     }
    // }


}

?>