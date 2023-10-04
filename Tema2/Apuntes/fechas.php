<?php
    echo time();

    echo "<p>Zona que tiene el servidor</p>";
    echo date_default_timezone_get();

    date_default_timezone_set("Europe/Madrid");
    echo "<br><br> Cambiada <br><br>";
    echo date_default_timezone_get();

    echo "<br><br>" . date("r");

    echo "<br><br>" . date("r");
    echo "<br><br>" . date("d/m/Y H:m:s");

    echo "<p></p>";

    echo "<p>String to fecha</p>";
    $cumpleGergi = strtotime("08/21/1998");
    echo $cumpleGergi;
    echo "<p>". date("d/m/y", $cumpleGergi)."</p>";

    $hoy = strtotime("now");

    echo "<p>". date("d/m/y", $hoy)."</p>";
    
    $tiempoRestado = $hoy - $cumpleGergi;
    $segndosAno = 60*60*24*365;

    $años = $tiempoRestado / $segndosAno;
    echo $años;

    echo "<p>" .date("d/m/y", $tiempoRestado). "</p>";

    $cumpleGergi = new DateTime('1998-08-21');
    $hoy = new DateTime();
    $intervado  = $cumpleGergi->diff($hoy);

    echo "<pre>";
    print_r($intervado);
    echo "</pre>";

    echo "<pre>";
    print_r(getdate());
    echo "</pre>";