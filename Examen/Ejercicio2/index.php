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
    <title>EligeFichero</title>
</head>
<body style="margin: 50px;  text-align: center;">
    <h1>Busqueda de peliculas</h1>
    <br><br><br>

    <form action="" method="get" name="formulario1" enctype="multipart/form-data">
        <label for="idNombre">Buscar por titulo o actor:
            <input type="text" name="nombre" id="idNombre" >
            <?php
                //comprobar que no este vacio
                if (enviado() && textoVacio("nombre")){
                    ?><span class="error"><== Debe rellenar este campo.</span><?
                }            
            ?>
        </label>
        <input type="submit" value="Buscar" name="buscar">

    </form>
    <?    
    if (enviado() && !textoVacio("nombre")) {
        $nombre=$_REQUEST['nombre'];
        mostrarPeliculas($nombre);
    }  
    ?>

</body>
</html>