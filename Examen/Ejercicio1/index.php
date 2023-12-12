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
<body style="margin-left: 50px;" >

    <?
    //creo un array de errores
    $errores = array();
    $generos = ['accion', 'comedia', 'drama', 'terror', 'ciencia_ficcion', 'romance', 'animacion', 'documental', 'aventura'];


    if (enviado() && validarFormulario($errores)) {
        //si he pulsado registrar y no hay errores
        //guardo todos los datos ordenandolos con la funcion guardar
        $datos = guardarDatos();
        //le paso los datos a escribir fichero
        escribirFichero($datos);
        escribir();
        echo "Correcto";
    }
    ?>
    

    <h1>Ejercicio 1 Examen - Guzmán Benito Rodríguez</h1>
    <br> 
    <form action="" method="post" name="formulario1" enctype="multipart/form-data">

<!--ID-->
    <label for="idPelicula">ID (Formato: 0000MM-000):
        <input type="text" name="idPelicula" id="idPelicula" placeholder="idPelicula" value="<?php recuerda('idPelicula')?>">
        <span class="error"> 
            <?php errores($errores,'idPelicula'); ?> 
        </span>
    </label>
    <br><br> 


<!--Titulo-->
    <label for="idTitulo">Titulo:
        <input type="text" name="titulo" id="idTitulo" placeholder="Titulo" value="<?php recuerda('titulo')?>">
        <!--Creo un span que muestra el error corespondiente a cada campo-->
        <span class="error"> 
            <?php  errores($errores,'titulo'); ?> 
        </span>
    </label>
    <br><br> 


<!--Director-->        
    <label for="idDirector">Director:
        <input type="text" name="director" id="idDirector" placeholder="Director" value="<?php recuerda('director')?>">
        <span class="error"> 
            <?php errores($errores,'director'); ?> 
        </span>
    </label>
    <br><br> 
    

<!--Año-->        
    <label for="idAño">Año:
        <input type="text" name="año" id="idAño" placeholder="Año" value="<?php recuerda('año')?>">
        <span class="error"> 
            <?php errores($errores,'año'); ?> 
        </span>
    </label>
    <br><br> 

<!--Actores-->        
    <label for="idActores">Actores Principales:
        <input type="text" name="actores" id="idActores" placeholder="actores" value="<?php recuerda('actores')?>">
        <span class="error"> 
            <?php errores($errores,'actores'); ?> 
        </span>
    </label>
    <br><br>

<!--Duracion-->        
<label for="idDuracion">Duracion(hh:mm:ss):
        <input type="text" name="duracion" id="idDuracion" placeholder="duracion" value="<?php recuerda('duracion')?>">
        <span class="error"> 
            <?php errores($errores,'duracion'); ?> 
        </span>
    </label>
    <br><br> 

<!--Sinopsis-->        
<label for="idSinopsis">Sinopsis(minimo 50 caracteres):
        <input type="text" name="sinopsis" id="idSinopsis" placeholder="sinopsis" value="<?php recuerda('sinopsis')?>">
        <span class="error"> 
            <?php errores($errores,'sinopsis'); ?> 
        </span>
    </label>
    <br><br> 

<!--Enviar-->
    <input type="submit" value="Registrar pelicula" name="registrar">

    </form>


</body>
</html>