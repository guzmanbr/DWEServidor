<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
</head>
<body>
    <?php
    include("../Fragmentos/header.html");
    ?>

    <h2>Ejercicio 2</h2>
    <h4>2. Crea una página a la que se le pase por url una variable con el nombre que quieras y
    muestre el valor de la variable, el tipo, si es numérico o no y si lo es, si es entero o float.</h4>
    <?php
            $variable = $_GET["nombre"];
        echo "La variable es => ".$variable;
        echo"<br>";
        echo "Es de tipo => ".gettype($variable);
        echo"<br>";
        if (is_numeric($variable)) {
            if (is_int($variable)) {
                echo "La variable es un numero entero";
            }else {
                echo "La variable es un numero float";
            }
        }else {
            echo "La variable no es numerica";
        }

        //Funcionamiento
        /*Se introduce un valor por la url, tras esto lo guardo en una variable y mustro el valor de esta y muestro 
        el tipo de dato que es. Despues, si la variable es numerica, mediante un if compruebo si esta es un numero entero o un float
        y muestro un echo dependiendo deel tipo que sea.
        */
    ?>



    <?php
    include_once("../Fragmentos/footer.html");
    ?>
    
</body>
</html>