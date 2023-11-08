<?php
    include("./validar.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>LeeFichero</title>
</head>
<body style="margin: 50px;  text-align: center;">

    <h1>Leer Fichero</h1>
    <br><br><br>

    <form action="" method="post" name="formulario1" enctype="multipart/form-data">
        
        <label for="idTextoLeer">
            <textarea name="textoLeer" id="idTextoLeer" cols="60" rows="10" readonly><?
            $fichero = $_GET['fichero'];
            leer($fichero);
            ?></textarea>
        </label>
        <br>
        <input type="submit" value="Volver" name="volver">
        <input type="submit" value="Editar" name="editar">

    </form>
    <?
        if (enviado()) { 
            //si el fichero existe va a leer o editar
            if (existe('volver')) { 
                header('Location: ./EligeFichero.php'); 
                exit();
            }   
            if (existe('editar')) {
                header('Location: ./EditarFichero.php?fichero='. $fichero); 
                exit();
            }                     
        }
    ?>
    
</body>
</html>