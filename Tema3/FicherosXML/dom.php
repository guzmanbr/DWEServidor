<?php

//Crear------------------------------------------------------------
$dom = new DOMDocument('1.0','utf-8');

//formato bonito
$dom -> formatOutput = true;

// //añadpo instrumentos 
// $raiz = $dom->appendChild($dom->createElement('instrumentos'));
// //creo etiqueta instrumento
// $instrumento = $dom->createElement('instrumento');
// //creo etiqueta nombre con guitarra dentro
// $nombre = $dom->createElement('nombre','guitarra');
// //creo etiqueta familia con cuerda dentro
// $familia = $dom->createElement('familia','cuerda');

// //añado el instrumento
// $raiz->appendChild($instrumento);
// //al instrumento le añado nombre y familia
// $instrumento->appendChild($nombre);
// $instrumento->appendChild($familia);
// //añado atributo id
// $instrumento->setAttribute('id',1);


// //lo mismo mas simplicficado
// $instrumento = $raiz->appendChild($dom->createElement('instrumento'));

// $instrumento->appendChild($dom->createElement('nombre','violin'));
// $instrumento->appendChild($dom->createElement('familia','cuerda'));
// $instrumento->setAttribute('id',2);




// //guardo el archivo
// $dom->save(('instrumentos.xml'));


//Leer---------------------------------------------------------------------------------------
$dom->load('instrumentos.xml');//cargo el fichero  load('instrumentos.xml',LIBXML_NOBLANKS) PARA QUITAR ESPACIOS 

echo "<pre>";
// print_r($dom);


//Leer si no conozco todas las etiquetas, srecorriendo todos los nodos
foreach ($dom->childNodes as $instrumentos) {

    //recorro los nodos de los instrumentos y los muestro
    foreach ($instrumentos->childNodes as $instrumento) {

        // //si el fichero no esta formatedao
        // //DOMelement
        // echo "\nNombre:". $instrumento->firstChild->nodeValue;
        // //DOMtext
        // echo "\nNombre:". $instrumento->firstChild->firstChild->data;

        //si el instrumento es de tipo nodeelement lo muestra, asi evita el fallo de coger los espacios vacios
        if ($instrumento->nodeType == 1) {

            echo "\n".$instrumento->getAttribute('id');

            $nodo = $instrumento->firstChild;
            do {
                //si nodo es nodelement
                if ($nodo->nodeType == 1) {
                    echo "\n".$nodo->tagName.":".$nodo->nodeValue;//escribo tag- nombre y valor guitarra
                }    
            } while ($nodo = $nodo->nextSibling);//nodo pasa a valer siguiente hermano mientras tenga un hermano despues

        }
    }
    
}

echo "<br><br><br>";

//Si conozco todas las etiquetas

//todas las etiquetas de tipo instrumento
$instrumentoLista = $dom->getElementsByTagName(('instrumento'));

foreach ($instrumentoLista as $valor) {
    //guardo en a el campo nombre, y luego accedo al tagname, y al nodeValue para mostrarlo
    $a = $valor->getElementsByTagName('nombre');
    echo "\n".$a->item(0)->tagName.":".$a->item(0)->nodeValue;

    $a = $valor->getElementsByTagName('familia');
    echo "\n".$a->item(0)->tagName.":".$a->item(0)->nodeValue;
}


?>
<br>
<a href="./descarga.php">Descargar</a>