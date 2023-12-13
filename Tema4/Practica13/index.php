<?
include("./funcionesBD.php");
require('./confBD.php');

$con = new mysqli();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Practica13</title>
</head>
<body style="margin: 50px;  text-align: center;">
    <h1>Practica 13</h1>
    
   


    <form action="" method="post" name="formulario1" enctype="multipart/form-data">

        <?
            if (existe("crear")) { 
                crearBase($con,'./ProductosBD.sql');
                echo "<input id='crearBD' type='hidden'";
            }

            if (existe("insertar")) { 
                header('Location: ./insertar.php?'); 
                exit();
            }
        ?>


        <input id="crearBD" type='submit' value='Crear base de datos' name='crear'>
        <input type="submit" value="Leer" name="leer">
        <input type="submit" value="Insertar" name="insertar">

    </form>

   

</body>
</html>