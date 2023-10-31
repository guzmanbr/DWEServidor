<?php

    echo"**********Busco palabra especifica:  ";
    $exp1 = '/maria/';
    echo preg_match($exp1,'maria es mi profe favortita');//devuelve 1 si se encuentra la expresion

    echo "<br><br>";

    echo "**********Uso comodin:  ";
    $exp2 = '/mari./';// el punto sirve para cualquier cosa,busca si mari se encuentra en la frase
    echo preg_match($exp2,'maria es mi profe favortita');//devuelve 1 si se encuentra la expresion

    echo "<br><br>";

    echo "**********Uso de maria/mario:  ";
    $exp3 = '/mari[ao]/';// corchetes para poner las opciones, busca maria o mario
    echo preg_match($exp3,'maria es mi profe favortita');
    echo preg_match($exp3,'mario es mi profe favortita');

    echo "<br><br>";

    echo "**********Uso de espacio [letra]  espacio:  ";
    $exp4 = '/\s[A-Za-z]\s/';// \s son espacios, devuelve si hay una letra rodeada de espacios
    $frase = "Hoy es Halloween y salimos a tomar unas cervezas";
    echo preg_match($exp4,$frase)."<pre>";
    //***preg_match_all()*//recoge donde estan las coincidencias y las guarda en un array
    $array = array();
    preg_match_all($exp4,$frase,$array);
    print_r($array);

    echo "<br><br>";

    echo "**********Numericos:  ";
    $exp5 = '/\d/';//'/[0-9]/' busca un numero
    $frase2 = "Hoy es dia 31 de noviembre de 2024 y es Halloween";
    $array2 = array();
    preg_match_all($exp5,$frase2,$array2);
    print_r($array2);
    //*
    $exp6 = '/\d{4}/';//busca el año, cuatro digitos con llaves ponemos el numero de digitos q buscar
    $array3 = array();
    preg_match_all($exp6,$frase2,$array3);
    print_r($array3);
    
    echo "<br>";
    echo "**********Iban:";
    $exp7 = '/^[A-Z]{2}\d{2}\s\d{4}\s\d{4}\s\d{2}\s\d{10}$/';//con el ^ y $ se delimitan. (^ tambien sirve para negar)
    $iban = "ES00 0000 0000 00 0000000000";
    echo preg_match($exp7,$iban);

        
    echo "<br><br>";
    echo "**********Uso de no contiene:<br>";

    $exp8 = '/mari[^ao]/';//con el ^ negamos, da 1 cuando no contenga lo puesto
    echo preg_match($exp8,'maria es mi profe favortita')."<br>";
    echo preg_match($exp8,'maril es mi profe favortita');

    echo "<br><br>********** nov, noviembre, november <br>";    
    //nov, noviembre, november
    $exp9 = '/^nov(iembre|ember)?$/';//delimito cuando empieza y acaba, ? para cero o una
    echo preg_match($exp9,'nov')."<br>";
    echo preg_match($exp9,'november')."<br>";
    echo preg_match($exp9,'novio')."<br>";
    echo preg_match($exp9,'noviembre')."<br>";
    echo preg_match($exp9,'anov')."<br>";
    echo preg_match($exp9,'novemberp')."<br>";


    echo "<br><br>";
    echo "**********Buscar en array:<br>";
    $array4 = ['Lunes','Martes','Sabado'];
    $exp10 = '/es$/';//todos los acabados en es
    print_r(preg_grep($exp10,$array4));

    
    echo "<br><br>";
    echo "**********Reemplazar en array:<br>";
    $array5 = [1,'a','B',4];
    // $patron=['/^\d$/','/^\D$/'];//cambiar numeros por la palabra numero
    // $cambio = ['numero','letra'];//cambia primero con primero segundo con segundo
    $patron=['/^\d$/'];
    $cambio = ['numero'];
    print_r(preg_replace($patron,$cambio,$array5));//lo modifica y lo devuelve entero


    echo "<br><br>";

    $patron2=['/^\d$/'];//cambiar numeros por la palabra numero
    $cambio = ['numero'];//cambia primero con primero segundo con segundo
    print_r(preg_filter($patron2,$cambio,$array5));//filter solo devuelve donde ha habido cambios

    echo "<br><br>**********Reemplazar en frase:<br>";
    $frase3 = 'maria es mi profe favorita';
    $patron3 = '/a/';
    $cambio2 = '@';
    print_r(preg_filter($patron3,$cambio2,$frase3));//sustitulle todas las letras por lo deseado

    echo "<br><br>********** Fecha cambiar callback:  <br><br>";
    $frase4 = 'si hay una fecha 01/02/2012 esta bien pero 1/2/221 mal, 15/12/21 mal';
    echo $frase4;
    //si el mes o dia tiene solo un digito añado un 0 delante
    //si el año tiene dos digitos, si es menor de 23 pongo 20 delante, si es mayor pongo el 19 delante

    //en esta funcion etntra el numero de veces ue coincide
    function corrige($coincide){
        print_r($coincide);

        //si dia s menor a 10 y su longitud es 1 añade un 0
        if ($coincide[1] < 10 && strlen($coincide[1])!=2) {
            $coincide[1] = '0'.$coincide[1];
        }
        //si mes es menor a 10 añade un 0
        if ($coincide[3] < 10 && strlen($coincide[3])!=2) {
            $coincide[3] = '0'.$coincide[3];
        }
        //si el año es menor o igual a 23 añade un 20 delante
        if ($coincide[5] <= 23) {
            $coincide[5] = '20'.$coincide[5];

        }else if($coincide[5]>23 && $coincide[5] > 100){
            $coincide[5] = '19'.$coincide[5];
        }

        return $coincide[1].$coincide[2].$coincide[3].$coincide[4].$coincide[5];
    }

    $array6 =array();
    $expFech = '/(\d{1,2})(\/)(\d{1,2})(\/)(\d{2,4})/';//poner \ delante para caracteres especiales
    //separamos por parentesisi en cuantas partes queremos dividir la expresion
    preg_match_all($expFech,$frase4,$array6);
    print_r($array6);
    echo "<br>";
    print_r(preg_replace_callback($expFech,'corrige',$frase4));

    echo "<br><br><br>";


?>