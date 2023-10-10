<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Pracica5</title>
</head>
<body>
    <?php
        include("../../Fragmentos/header.html");
    ?>
    <?php
        include("../../Fragmentos/nav.html");
    ?>
    <?php
        echo "<h3>1. Escribe un programa que dado un array ordénalo y devuelve otro array sin que haya elementos repetidos. 
        datos = [2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3]; </h3>";
        $datos = [2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3]; 
        print_r($datos);
        echo "<br><br>";

        $datosUnicos = array_unique($datos);
        print_r($datosUnicos);
        echo "<br><br>";

        $datosOrdenado = asort($datosUnicos);
        
        print_r($datosOrdenado);
        echo "<br><br>";      
        
        





        echo "<h3></h3>"
         
    ?>

    <?php
        include("../../Fragmentos/footer.html");
    ?>
</body>
</html>