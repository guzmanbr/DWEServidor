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
    <h1>Elige Fichero</h1>
    <br><br><br>

    <form action="" method="get" name="formulario1" enctype="multipart/form-data">
        <label for="idNombre">Nombre Fichero:
            <input type="text" name="nombreFichero" id="idNombre" >

            <?php
                //comprobar que no este vacio
                if (enviado() && textoVacio("nombreFichero")){
                    ?><span class="error"><== Debe rellenar este campo.</span><?
                }
                                    
                //si no esta vacio y se ha pulsado algun boton 
                if (enviado() && !textoVacio('nombreFichero')) { 

                    //si el fichero existe va a leer o editar
                    if (existe('leer')) { 
                        if (file_exists($_REQUEST['nombreFichero'])){
                            header('Location: ./LeeFichero.php?fichero='. $_REQUEST["nombreFichero"]); 
                            exit();
                        }else{
                            ?><span class="error"><== El fichero selecionado no existe.</span><?
                        }
                    }   
                    if (existe('editar')) {
                        header('Location: ./EditarFichero.php?fichero='. $_REQUEST["nombreFichero"]); 
                        exit();
            
                    }                     
                }
        
            ?>
        </label>

        <br><br>
        <input type="submit" value="Leer" name="leer">
        <input type="submit" value="Editar" name="editar">


    </form>

</body>
</html>