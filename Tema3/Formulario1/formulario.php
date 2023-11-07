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
        if (enviado() && validarFormulario($errores)) {
            echo "<pre>";
            print_r($_REQUEST);
        
        }else{//si hay algun error vuelve a mostrar el formulario
    ?>

        <!-- 
           - Formulario: enviar del usuario al servidor
           - action: donde se quieren enviar los datos, si no se le da un fichero llama a la pagina actual
           - method: forma en la que se envian los datos, get-> los datos van por la url, post-> van ocultos en la cabecera
           - name: para php no es necesario para js si
           - enctype:para poder enviar ficheros 
        -->

    <h1>Formulario Basico</h1>
    <br>
    <form action="" method="post" name="formulario1" enctype="multipart/form-data">


    <!--Text-->
        <label for="idNombre">Nombre:
            <input type="text" name="nombre" id="idNombre" placeholder="Nombre" value="<?php recuerda('nombre')?>">
            <!--Muestra el error correspondiente del array errores-->
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
    <!--Radio-->
    <!--
        Si queremos que solo se pueda seleccionar uno mismo nombre
        value-> lo necesitamos para determinar lo que queremos que se mande
    -->
        <h6>Genero:</h6>
        <!--Funcion con el parametro nombre y valor para mantener la opcion marcada-->
        <label for="hombre">Hombre <input <? recuerdaRadio('genero','hombre');?>  type="radio" name="genero" id="idHombre" value="hombre"></label>
        <label for="mujer">Mujer <input <? recuerdaRadio('genero','mujer');?> type="radio" name="genero" id="idMujer" value="mujer"></label>

        <span class="error"> 
            <?php errores($errores,'genero'); ?> 
        </span>
        <br><br><br>

    <!--CheckBox-->
    <!--
        para guardar sus valores necesitamos que su nombre lleve corchetes, asi se guardara en un array
        value-> en la etiqueta value
    -->
        <h6>Aficiones:</h6>
        <span class="error">
            <?php errores($errores,'aficion');?> 
        </span>
        <br>
        <!--Funcion con el parametro nombre y valor para mantener las opciones marcadas-->
        <label for="ch1">Montar a caballo <input <?php recuerdaCheck('aficion','jinete')?> type="checkbox" name="aficion[]" id="ch1" value="jinete"></label>
        <br>
        <label for="ch2">Jugar al futbol <input <?php recuerdaCheck('aficion','futbol')?> type="checkbox" name="aficion[]" id="ch2" value="futbol"></label>
        <br>
        <label for="ch3">Nadar <input <?php recuerdaCheck('aficion','nadador')?> type="checkbox" name="aficion[]" id="ch3" value="nadador"></label>


        <br><br>

    <!--Select-->
    <!--El valor en la etiqueta value-->
        <h6>Equipos Baloncesto</h6>
        <select name="equipos" id="">
            <option value="0" >Seleccione un opcion</option>
            <option <? recuerdaSelect('equipos','lakers');?> value="lakers" >Lakers</option>
            <option <? recuerdaSelect('equipos','celtic');?> value="celtics" >Celtics</option>
            <option <? recuerdaSelect('equipos','bulls');?> value="bulls" >Bulls</option>
        </select>
        <span class="error">
            <?php errores($errores,'equipos');?> 
        </span>

        <br><br>

    <!--Fecha-->
    <!--Formato de la fecha datetime-local: AAA-mm-dd-->
        <h6>Fecha:</h6>
        <label for="idFecha">Fecha <input value='<?recuerda('fecha_n')?>' type="datetime-local" name="fecha_n" id="idFecha"></label>
        <span class="error"> 
            <?php errores($errores,'fecha_n'); ?> 
        </span>
        <br><br>

    <!--Ficheros-->
    <!--Ficheros recibe el servidor en una carpeta temporal $_FILES-->
        <h6>Fichero:</h6>
        <span class="error"> 
            <?php errores($errores,'fichero'); ?> 
        </span>
        <input type="file" name="fichero" id="">
        <br><br>

    <!--Hidden-->
    <!--El usuario no lo ve en el navegador, sirve para enviar informacion sin que el usuario la vea-->
        <input type="hidden" name="usuarioVIP" value="156">

        <br><br>

    <!--Input submit-->
    <!--Se pone name para verificar que se ha enviado-->    
        <input type="submit" value="Enviar" name="enviar">
        <input type="submit" value="Borrar" name="borrar">

        <br><br>

    </form>

    <?//abro php
    }//cierro el else
    ?><!--cierro php-->
    
</body>
</html>