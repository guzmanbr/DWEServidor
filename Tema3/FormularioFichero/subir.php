<?php

if (count($_FILES)!= 0) {
    echo "<pre>";
    print_r($_FILES);//muestro los datos del pdf
    echo "</pre>";
    $ruta = '/var/www/html/DWEServidor/Tema3/';//guardo la ruta donde quiero que se guarde
    $ruta .= basename($_FILES['ficheros']['name']);//le sumo a la ruta el nombre del fichero
    if (move_uploaded_file($_FILES['fichero']['tmp_name'],$ruta)) {//al fichero con nombre temporal,tmp_name, lo muevo a la ruta que puse antes
       echo"Archivo subido";
    }else {
        echo "Error al subir el archivo";
    }
}

?>