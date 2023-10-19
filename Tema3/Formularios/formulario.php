<?php
    include("./validaciones.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Formularios</title>
</head>
<body style="text-align: center;">

    <?php

        $errores = array();
        
        if (enviado()) {
            
            if (textoVacio('nombre')) {
                $errores['nombre'] = "Nombre vacio";
            }

            if (textoVacio('apellido')) {
                $errores['apellido'] = "Apellido vacio";
            }
        }



    ?>

    <h1>Formulario Basico</h1>
    <br>
    <form action="" method="post" name="formulario1" enctype="multipart/form-data">


        <label for="idNombre">Nombre:
            <input type="text" name="nombre" id="idNombre" placeholder="Nombre" value="<?php recuerda('nombre')?>">

            <span class="error"> 
                <?php errores($errores,'nombre'); ?> 
            </span>

        </label>

        <br>

        <label for="idApellido">Apellido:
            <input type="text" name="apellido" id="idApellido" placeholder="Apellido" value="<?php recuerda('apellido')?>">
        
            <span class="error">
                <?php errores($errores,'apellido');?> 
            </span>

        </label>

        <br><br>
        <p>Genero:</p>
        <label for="hombre">Hombre <input type="radio" name="genero" id="idHombre" value="hombre"></label>
        <label for="mujer">Mujer <input type="radio" name="genero" id="idMujer" value="mujer"></label>

        <br><br><br>
        
        <p>Aficciones:</p>
        <label for="ch1">Montar a caballo <input type="checkbox" name="aficion[]" id="ch1" value="jinete"></label>
        <br>
        <label for="ch2">Jugar al futbol <input type="checkbox" name="aficion[]" id="ch2" value="futbol"></label>
        <br>
        <label for="ch3">Nadar <input type="checkbox" name="aficion[]" id="ch3" value="nadador"></label>

        <br><br>

        <p>Equipos Baloncesto</p>
        <select name="equipos" id="">
            <option value="0" >Seleccione un opcion</option>
            <option value="lakers" >Lakers</option>
            <option value="celtics" >Celtics</option>
            <option value="bulls" >Bulls</option>
        </select>

        <br><br>

        <label for="idFecha">Fecha <input type="datetime-local" name="fecha_n" id="idFecha"></label>

        <br><br>

        <input type="file" name="fichero" id="">

        <br><br>

            <input type="hidden" name="usuarioVIP" value="156">

        <br><br>

        <input type="submit" value="Enviar" name="enviar">
        <input type="reset" value="Borrar" name="borrar">

        <br><br>

    </form>
    
</body>
</html>