<?php
include("../Fragmentos/Header/header.html");
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
include_once("../Fragmentos/Footer/footer.html");
?>