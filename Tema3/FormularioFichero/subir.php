<?php

if (count($_FILES)!= 0) {
    print_r($_FILES);
    $ruta = '/var/www/html/DWEServidor/Tema3/';
    $ruta .= basename($_FILES['fichero']['name']);
    move_uploaded_file();
}

?>