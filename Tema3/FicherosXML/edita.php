<?php


cambioDisponible(1);

function cambioDisponible(){

    if (file_exists('ficheroXML.xml')) {

        $xml = simplexml_load_file('JUEGOS.xml');//cargo el fichero

        foreach ($xml as $juego) {
            
            if ($juego[0]['id'] == $id) {

               if ($juego[0]['disponible'] == "si") {

                $juego[0]['disponible'] == "no";

               }else{
                $juego[0]['disponible'] == "no";
                
               }
               break;
            }

            $xml->asXML('juegos.xml');

        }

        

    } else {
        exit('Error abriendo ficheroXML.xml.');
    }
}















?>