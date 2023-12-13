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
        if (isset($_REQUEST['buscar'])) {
            return true;
        }else {
            return false;
        }
    }



    function mostrarPeliculas($nombre){

        //Podemos no saber el nombre de las etiquetas
        if (file_exists('peliculas.xml')) {
            $xml = simplexml_load_file('peliculas.xml');//cargo el fichero
            //Aceder a la informacio
            foreach ($xml as $pelicula) {
            //si el actor o el titulo coinciden muestro la informacion
              if ($pelicula->actores == $nombre || $pelicula->titulo == $nombre) {
                echo "Titulo: ".$pelicula->titulo."<br>";
                echo "Director: ".$pelicula->director."<br>";//acedo a sus campos
                echo "Lanzamiento: ".$pelicula->año."<br>";
                echo "Actores: ".$pelicula->actores."<br><br>";
              }
            }
        
        } else {
            exit('Error abriendo peliculas.xml.');
        }
    }

?>