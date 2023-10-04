<?php
include("../Fragmentos/Header/header.html");
?>

<h2>Ejercicio 3</h2>
<h4>3. Crea una página en la que se le pase como parámetros en la URL (ano, mes y día) y muestre
el día de la semana de dicho día. (Por defecto, dale el valor de 12/09/2022)</h4>
<?php
    $ano = $_GET["ano"];
    $mes = $_GET["mes"];
    $dia = $_GET["dia"];
    $fechaurl = "";
    $fechaurl = $ano."-".$mes."-".$dia;

    $fecha = date("d-m-Y , D ", strtotime($fechaurl));
    echo "La fecha introducida  es => ".$fecha; 

    //Funcionamiento
    /*Recojo los tres valores por la url, estos los paso a una variable cada uno y posteriormente los junto en una
    variable fechaurl,tras esto transformo esta variable de string a date y le cambio el formato en el que se muestra.
    */
?>

<?php
include_once("../Fragmentos/Footer/footer.html");
?>
