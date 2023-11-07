<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Tarea4</title>
</head>
<body>
<?php
    include_once("../Fragmentos/Header/header.html");
?>
<?php
        echo "<h3>1. Realiza un programa utilizando bucles que muestre la siguiente figura.</h3>";
        $filas= 4;
        for ($i=1; $i <= $filas; $i++) { 
            for ($blanco=1; $blanco<=$filas-$i; $blanco++) { 
                echo"&nbsp;&nbsp";
            }
            for ($asterisco=1; $asterisco <=($i*2)-1; $asterisco++) {    
                echo "*";
            } 
            echo "<br>";
        }
        echo "<h3>2. Realiza un programa utilizando bucles que muestre la siguiente figura.</h3>";
        $lineasrombo=3;
        for ($i=1; $i <= $lineasrombo ; $i++) { 
            for ($blanco=1; $blanco<=$lineasrombo-$i; $blanco++) { 
                echo"&nbsp;&nbsp";
            }
            for ($asterisco=1; $asterisco <=($i*2)-1; $asterisco++) {    
                echo "*";
            } 
            echo "<br>";
        }
        for ($i=2; $i >= 1 ; $i--) { 
            for ($blanco=1; $blanco<=$lineasrombo-$i; $blanco++) { 
                echo "&nbsp;&nbsp";
            }
            for ($asterisco=1; $asterisco <=($i*2)-1; $asterisco++) {    
                echo "*";
            } 
            echo "<br>";
        }
        
        echo "<h3>3. Realiza un programa utilizando bucles que muestre la siguiente figura</h3>";
        
        
        for ($i=1; $i <= $lineasrombo ; $i++) { 
            for ($blanco=1; $blanco<=$lineasrombo-$i; $blanco++) { 
                echo "&nbsp;&nbsp";
            }
            for ($asterisco=1; $asterisco <=($i*2)-1; $asterisco++) {    
                if ($asterisco==1 || $asterisco==($i*2-1)) {
                    echo "*";
                }else {
                    echo "&nbsp;&nbsp;";
                }        
            } 
            echo "<br>";
        }
        for ($i=2; $i >= 1 ; $i--) { 
            for ($blanco=1; $blanco<=3-$i; $blanco++) { 
                echo "&nbsp;&nbsp";
            }
            for ($asterisco=1; $asterisco <=($i*2)-1; $asterisco++) {    
                if ($asterisco==1 || $asterisco==($i*2-1)) {
                    echo "*";
                }else {
                    echo "&nbsp;&nbsp;";
                }
            } 
            echo "<br>";
        }
        
        echo "<h3>4. Realiza un programa que le introduzca un valor (pasado por la URL) de un producto con 2 decimales
        y posteriormente un valor con el que pagar por encima (Valor del producto 6.33€ y ha pagado con
        10€). Muestra el número mínimo de monedas con las que puedes devolver el cambio</h3>";

        echo"<h3>5. Escriba un programa que se le pase un año por la URL y que escriba si es bisiesto o no.
        Los años bisiestos son múltiplos de 4, pero los múltiplos de 100 no lo son, aunque los múltiplos de
        400 sí. </h3>";


        include_once("../Fragmentos/Footer/footer.html");
?>
</body>
</html>