<?php

//Parte 1

    //Escribir br
    function escribirBr(){
        echo "<br>";
    };

    //Pinta entre cadena de h1
    function escribirH1($texto){
        echo "<h1>".$texto."</h1>";
    };

    //Pintar cadena de p
    function escribirP($texto){
        echo "<p>".$texto."</p>";
    };


    //Delvuelve el fichero actual self()
    function ficheroActual(){
        echo "El nombre del fichero actual es ".basename( __FILE__ );
    };

    //Devuelve la letra del DNI 
    function letraDni($numero){
        $resto = $numero%23;  
        $arrayLetras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        echo "El dni con su letra serias: ".$numero." ".$arrayLetras[$resto];
    }


//Parte 2


    //2. Haz una función que genere números aleatorios que se le pase como parámetros:
    // a. Array para lo rellene con los números
    // b. Número mínimo incluido
    // c. Número máximo incluido
    // d. Número de números generados
    // e. True si puedes repetirse/ False si no pueden repetirse



    function numerosAleatorios(&$arrayNum,$max,$min,$tamaño,$repetidos=false){

        // $arrayNum = array();

        //Si se pueden repetir
        if ($repetidos==true) {
            //creo un for y lo repito las mismas veces que el tamaño pasado por parametros
            for ($i=0; $i < $tamaño; $i++) { 
                $arrayNum[$i] = rand($min, $max);//relleno el array con el numero generado
            }
        }elseif ($repetidos == false) {

            for ($i=0; $i < $tamaño; $i++) { 
                $numAleatorio = rand($min, $max);// numero generado

            
                if (in_array($numAleatorio,$arrayNum)) {
                    
                }else {
                    $arrayNum[$j]=$numAleatorio;
                }
            

            }

            
        }

        $arrayNum[$i] = rand($min, $max);//relleno el array con el numero generado
    

        return print_r($arrayNum);
        

    }


?>