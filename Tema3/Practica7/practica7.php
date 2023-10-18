<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Pracica7</title>
</head>
<body>
    <?php
        include("../../Fragmentos/header.html");
    ?>
    <?php
        include("../../Fragmentos/nav.html");
    ?>
    <?php
        include("./funciones/funciones.php");

        //Funcion h1
        $texto = "Funcion H1";
        escribirH1($texto);

        escribirBr();
        //Funcion p
        $parrafo = "Funcion escribir parrafo";
        escribirP($parrafo);

        escribirBr();
        //Funcion fichero actual
        ficheroActual();

        escribirBr();
        escribirBr();

        //Funcion letra dni
        $numero=71039937;
        letraDni($numero);

        escribirBr();
        escribirBr();

        //Funcion numero aleatoprtio
        $arrayNum=array();
        $max=1;
        $min=0;
        $tamaño=10;
        $repetidos= true ;

        numerosAleatorios($arrayNum,$max,$min,$tamaño,$repetidos);




         
    ?>

    <?php
        include("../../Fragmentos/footer.html");
    ?>
</body>
</html>