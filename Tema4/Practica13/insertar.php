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
    <?php
        $errores = array();
        if (enviado() && validarFormulario($errores)) {
            header('Location: ./leerTabla.php?'); 
            exit();    
        }else{//si hay algun error vuelve a mostrar el formulario
    ?>
   
    <form action="" method="post" name="formulario1" enctype="multipart/form-data">

        <label for="idNombre">Nombre producto:
            <input type="text" name="nombre" id="idNombre" placeholder="Nombre" value="<?php recuerda('nombre')?>">
            <!--Muestra el error correspondiente del array errores-->
            <span class="error"> 
                <?php errores($errores,'nombre'); ?> 
            </span>
        </label>
        <br><br>
        <label for="idPrecio">Precio producto:
            <input type="text" name="precio" id="idPrecio" placeholder="Precio" value="<?php recuerda('precio')?>">
            <!--Muestra el error correspondiente del array errores-->
            <span class="error"> 
                <?php errores($errores,'precio'); ?> 
            </span>
        </label>
        <br><br>
        <label for="idFecha">Fecha producto:
            <input type="text" name="fecha" id="idFecha" placeholder="Fecha" value="<?php recuerda('fecha')?>">
            <!--Muestra el error correspondiente del array errores-->
            <span class="error"> 
                <?php errores($errores,'precio'); ?> 
            </span>
        </label>
        <br><br>

        <input type="submit" value="Insertar" name="insertar">
    </form>
    <?//abro php
    }//cierro el else
    ?><!--cierro php-->
   

</body>
</html>