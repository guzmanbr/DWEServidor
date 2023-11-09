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
    <title>EditarFichero</title>
</head>
<body style="margin: 50px;  text-align: center;">

    <h1>Editar Fichero</h1>
    <br><br><br>
    <form action="" method="post" name="formulario1" enctype="multipart/form-data">

        <label for="idTextoEditar">
            <textarea name="textoEditar" id="idTextoEditar" cols="60" rows="10"><?
            $fichero = $_GET['fichero'];
            if (file_exists($fichero)) {
                leer($fichero);
            }else {
                echo "No existe, escribe algo";
            }

            ?></textarea>
        </label>

        <br>
        <input type="submit" value="Volver" name="volver">
        <input type="submit" value="Guardar" name="guardar">

    </form>

    <?
        if (enviado()) { 
            //si el fichero existe va a leer o editar
            if (existe('volver')) { 
                header('Location: ./EligeFichero.php'); 
                exit();
            }                     
            if (existe('guardar')) {
                guardar($fichero,$_REQUEST['textoEditar']);
                header('Location: ./LeeFichero.php?fichero='. $fichero); 
                exit();
            }
        }
    ?>
    
</body>
</html>