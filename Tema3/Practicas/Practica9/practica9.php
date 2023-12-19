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

    
    <?php
        $errores = array();
        if (enviado() && validarFormulario($errores)) {
            subirFichero('fichero');
            mostrarDatos();
        
        }else{//si hay algun error vuelve a mostrar el formulario
    ?>

    <h1>Formulario Practica 09 - Guzmán Benito Rodríguez</h1>
    <br> 
    <form action="" method="post" name="formulario1" enctype="multipart/form-data">

<!--Nombre-->
    <label for="idNombre">Nombre:
        <input type="text" name="nombre1" id="idNombre1" placeholder="Nombre" value="<?php recuerda('nombre1')?>">
        <span class="error"> 
            <?php errores($errores,'nombre1'); ?> 
        </span>
    </label>
    <br><br> 


<!--Apellidos-->        
    <label for="idApellido1">Apellido:
        <input type="text" name="apellido1" id="idApellido1" placeholder="Apellido" value="<?php recuerda('apellido1')?>">
        <span class="error"> 
            <?php errores($errores,'apellido1'); ?> 
        </span>
    </label>
    <br><br> 

<!--Contraseña-->        
    <label for="idPass1">Contraseña:
        <input type="password" name="pass1" id="idPass1" placeholder="Contraseña" value="<?php recuerda('pass1')?>">
        <span class="error"> 
            <?php errores($errores,'pass1'); ?> 
        </span>
    </label>
    <br><br> 

    <label for="idPass2">Repetir contraseña:
        <input type="password" name="pass2" id="idPass2" placeholder="Repetir contaseña" value="<?php recuerda('pass2')?>">
        <span class="error"> 
            <?php errores($errores,'pass2'); ?> 
        </span>
    </label>
    <br><br>    

<!--Fecha-->        
    <label for="idFecha">Fecha:
        <input type="text" name="fecha" id="idFecha" placeholder="Fecha" value="<?php recuerda('fecha')?>">
        <span class="error"> 
            <?php errores($errores,'fecha'); ?> 
        </span>
    </label>
    <br><br> 
    
<!--Dni-->        
    <label for="idDni">DNI:
        <input type="text" name="dni" id="idDni" placeholder="DNI" value="<?php recuerda('dni')?>">
        <span class="error"> 
            <?php errores($errores,'dni'); ?> 
        </span>
    </label>
    <br><br> 

<!--Email-->
    <label for="idEmail">Email: 
        <input type="email" name="email" id="idEmail" placeholder="prueba@prueba.com" value="<?php recuerda('email')?>">
        <span class="error"> 
            <?php errores($errores,'email');?> 
        </span>
    </label>
    <br><br>

<!--Fichero-->
    <label for="idFichero">Subir imagen: <input type="file" name="fichero" id="fichero"  value="<?php recuerda('fichero')?>"></label>
    <span class="error"> 
            <?php errores($errores,'fichero');?> 
        </span>
    <br><br>

<!--Enviar-->
    <input type="submit" value="Enviar" name="enviar">
    <input type="reset" value="Borrar" name="borrar">


    </form>

    <?//abro php
    }//cierro el else
    ?><!--cierro php-->
    
</body>
</html>