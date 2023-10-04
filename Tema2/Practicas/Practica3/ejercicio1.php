
<?php
include("../Fragmentos/Header/header.html");
?>
<h2>Ejercicio 1</h2>
<h4>1. Crea una página que:</h4>
<?php
    //a
    echo "<h5>a. Muestra el nombre del fichero que se está ejecutando.</h5> ".basename( __FILE__ );
    echo "<br><br>";
    //b
    echo "<h5>b. Muestra la dirección IP del equipo desde el que estás accediendo.</h5>".$_SERVER['REMOTE_ADDR'];///
    echo "<br><br>";
    //c
    echo "<h5>c. Muestra el path donde se encuentra el fichero que se está ejecutando.</h5>". __FILE__;
    echo "<br><br>";
    //d 
    date_default_timezone_set('Europe/Madrid');
    echo "<h5>d. Muestra la fecha y hora actual formateada en 2022-09-4 19:17:18.</h5>".  date("Y-m-d h:i:s " );
    echo "<br><br>";
    //e
    date_default_timezone_set('Europe/Lisbon');
    echo "<h5>e. Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de
    mes de año, hh:mm:ss , Zona horaria).</h5>". date("d  M Y h:i:s " ). date_default_timezone_get();
    echo "<br><br>";
    //f
    $cumpleaños= new DateTime('1998-01-02');
    echo "<h5>f. Inicializa y muestra una variable en timestamp y en fecha con formato dd/mm/yyyy
    de tu cumpleaños.</h5>". date_format($cumpleaños,'d-m-Y');
    echo "<br><br>";
    //g
    $fecha = date_create('2022-10-11');
    date_add($fecha, date_interval_create_from_date_string('60 days'));
    echo "<h5>g. Calcular la fecha y el día de la semana de dentro de 60 días.</h5>". date_format($fecha, 'd-m-y,  D');
    echo "<br><br>";
?>

<?php
include_once("../../../Fragmentos/footer.html");
?>