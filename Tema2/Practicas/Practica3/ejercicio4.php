<?php
include("../Fragmentos/Header/header.html");
?>
<h4>4. Crea una página en la que se le pase como parámetros en la URL (ano, mes y día) de dos
personas y muestre las fechas de nacimiento de ambos y la diferencia de edad en años. </h4>

<?php
    $fecha1url=$_GET["fecha1"];
    $fecha2url=$_GET["fecha2"];

    $fecha1 = date("Y-m-d", strtotime($fecha1url));
    $fecha2 = date("Y-m-d ", strtotime($fecha2url));

    echo "Fecha1 =>".$fecha1."<br>";
    echo "Fecha2 =>".$fecha2."<br>";

    if ($fecha1>$fecha2) {
        $dif = $fecha1 - $fecha2;
    }else {
        $dif = $fecha2 - $fecha1;
    }
    
    echo "La diferencia de " .$dif." años.";

    //Funcionamiento
    /*Pido dos fechas distintas por url. Las paso a formato date y tras esto compruebo cual es mayor para realizar la resta
    y que el resultado sea positivo. Muestro el resultado de la diferencia entre ambas fechas.
    */
?>

<?php
include_once("../Fragmentos/Footer/footer.html");
?>
