<?php
//SUDO APT-GET INSTALL PHP-XML


//Leer ficheo xml sabiendo el nombre de las etiquetas que hay que recorrer
if (file_exists('ficheroXML.xml')) {

    $xml = simplexml_load_file('ficheroXML.xml');//cargo el fichero
 
    //Muestro la informacion
    echo "<pre>";
        //print_r($xml);
    echo "<br><br>";

    //Aceder a la informacio

    foreach ($xml as $elemento) {
        //print_r($elemento);
        echo "El coche: ".$elemento['id']."<br>";//Acedo a su atributo
        echo "  La marca es: ".$elemento->marca;//acedo a sus campos
        echo ", y modelo: ".$elemento->modelo;
        echo ".<br>";

    }

    

} else {
    exit('Error abriendo ficheroXML.xml.');
}




//Podemos no saber el nombre de las etiquetas
if (file_exists('ficheroXML.xml')) {

    $xml = simplexml_load_file('ficheroXML.xml');//cargo el fichero
 
    //Muestro la informacion
    echo "<pre>";
        //print_r($xml);
    echo "<br><br>";

    //Aceder a la informacio

    foreach ($xml as $elemento) {
        leerElemento($elemento);
    }

    

} else {
    exit('Error abriendo ficheroXML.xml.');
}


function leerElemento($elemento){

    foreach ($elemento->children() as $a) {
        echo " ". $a;//escribe todos los hijos de cada elemento
    }

    //echo "<br>". $elemento->children()[0];//coge la primera etiqueta del elemento sin saber el nombre
    //echo " ".$elemento->children()[1];
}

?>