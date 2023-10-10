<?php

//array numerico
$arrayNum = array(10);
print_R($arrayNum);

echo "<br>";

$array = array("Lunes",2,"Miercoles");
var_dump($array);

echo "<br>";

$arrayCorta = array("Lunes",2);
var_dump($arrayCorta);

$semana = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
print_r($semana);

echo gettype($array);

for ($i=0; $i < count($semana); $i++) { 
    echo "<br>".$semana[$i];
}

//array dinamico
//modifica su contenido/tamaño

$semana[7]


?>