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
<body style="margin-left: 30px;">

    
    <?php
        $errores = array();
        if (enviado() && validarFormulario($errores)) {
            echo "<pre>";
            print_r($_REQUEST);
        
        }
    ?>

    <h1>Formulario de registro</h1>
    <br> 
    <form action="" method="post" name="formulario1" enctype="multipart/form-data">

    <!--ALFABETICO-->
        <label for="idNombre1">Alfabetico:
            <input type="text" name="nombre1" id="idNombre1" placeholder="Nombre" value="<?php recuerda('nombre1')?>">
            <span class="error"> 
                <?php errores($errores,'nombre1'); ?> 
            </span>
        </label>
        <br><br> 

        <label for="idNombre">Alfabetico Opcional:
            <input type="text" name="nombre2" id="idNombre" placeholder="Nombre" value="<?php recuerda('nombre2')?>">
        </label>
        <br><br> 
    <!--ALFANUMERICO-->        
        <label for="idApellido1">Alfanumérico:
            <input type="text" name="apellido1" id="idApellido1" placeholder="Apellido" value="<?php recuerda('apellido1')?>">
            <span class="error"> 
                <?php errores($errores,'apellido1'); ?> 
            </span>
        </label>
        <br><br> 

        <label for="idApellido2">Alfanumérico Opcional:
            <input type="text" name="apellido2" id="idApellido2" placeholder="Apellido" value="<?php recuerda('apellido2')?>">
        </label>
        <br><br> 

    <!--NUMERICO-->        
        <label for="idNum1">Numerico:
            <input type="number" name="num1" id="idNum1" placeholder="Numero" value="<?php recuerda('num1')?>">
            <span class="error"> 
                <?php errores($errores,'num1'); ?> 
            </span>
        </label>
        <br><br> 

        <label for="idNum2">Numerico Opcional:
            <input type="number" name="num2" id="idNum2" placeholder="Numero" value="<?php recuerda('num2')?>">
        </label>
        <br><br>    

    <!--Date-->
        <label for="idFecha">Fecha:
            <input type="datetime-local" name="fecha" id="idFecha" value="<?php recuerda('fecha')?>">
            <span class="error"> 
                <?php errores($errores,'fecha');?> 
            </span>
        </label>
        <br><br>  
        <label for="idFecha2">Fecha Opcional:
            <input type="datetime-local" name="fecha2" id="idFecha2" value="<?php recuerda('fecha2')?>">
        </label>

    <!--Radio-->
        <p>Radio Obligatorio</p>
        <label for="idOpcion1">Opcion1 <input <? recuerdaRadio('opciones','opcion1');?> type="radio" name="opciones" id="idOpcion1" value="opcion1"></label>
        <label for="idOpcion2">Opcion2 <input <? recuerdaRadio('opciones','opcion2');?> type="radio" name="opciones" id="idOpcion2" value="opcion2"></label>
        <label for="idOpcion3">Opcion3 <input <? recuerdaRadio('opciones','opcion3');?> type="radio" name="opciones" id="idOpcion3" value="opcion3"></label>
        <span class="error"> 
                <?php errores($errores,'opciones');?> 
            </span>
        <br><br>

    <!--Select-->
        <p>Select</p>
        <select name="selects" id="">
            <option <? recuerdaSelect('selects','Select1');?> value="0">Select1</option>
            <option <? recuerdaSelect('selects','Select2');?> value="Select2">Select2</option>
            <option <? recuerdaSelect('selects','Select3');?> value="Select3">Select3</option>
        </select>
        <span class="error"> 
                <?php errores($errores,'selects');?> 
            </span>
        <br><br>

    <!--Check-->
        <p>Checks</p>
        <label for="idCheck1"><input type="checkbox" name="checks[]" id="idCheck1" value="check1">Check1</label>
        <label for="idCheck2"><input type="checkbox" name="checks[]" id="idCheck2" value="check2">Check2</label>
        <label for="idCheck3"><input type="checkbox" name="checks[]" id="idCheck3" value="check3">Check3</label>
        <span class="error"> 
            <?php errores($errores,'checks');?> 
        </span>
        <br><br>

    <!--Telefono-->
        <label for="idTelefono">Telefono:<input type="tel" name="telefono" id="idTelefono" placeholder="654987321" value="<?php recuerda('telefono')?>"></label>
        <span class="error"> 
                <?php errores($errores,'telefono');?> 
            </span>
        <br><br>

    <!--Email-->
        <label for="idEmail">Email: 
            <input type="email" name="email" id="idEmail" placeholder="prueba@prueba.com" value="<?php recuerda('email')?>">
            <span class="error"> 
                <?php errores($errores,'email');?> 
            </span>
        </label>
        <br><br>

    <!--Contraseña-->
        <label for="idContraseña">Contraseña: 
            <input type="password" name="contaseña" id="idContraseña" value="<?php recuerda('contraseña')?>">
            <span class="error"> 
                <?php errores($errores,'contraseña');?> 
            </span>
        </label>
        <br><br>
    <!--Fichero-->
        <label for="idFichero">Fichero: <input type="file" name="fichero" id=""></label>
        <span class="error"> 
                <?php errores($errores,'fichero');?> 
            </span>
        <br><br>
 
    <!--Enviar-->
    <input type="submit" value="Enviar" name="enviar">
    <input type="submit" value="Borrar" name="borrar">


    </form>

    
</body>
</html>