<?php
    require('./conexionBD.php');
    require('./validaciones.php');
    require('./funcionesBD.php');
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tarea 13 - A - MySQLi</title>

    <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
        <link rel="stylesheet" href="../../../css/estilos.css">

        <style>
            h3 {
                margin: 20px;
            }

            h6 {
                margin-left: 40px;
            }

            form {
                text-align:center;
                margin: 30px;
            }

            input {
                margin: 5px;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            
            <?php

                include("../../../html/header.php");
            ?>

            <!-- NAV -->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark bg-gradient lg-sticky-top d-flex">

                <div class="navbar row container-fluid d-flex text-center">

                    <ul class="navbar-nav row row-cols">

                        <div class="col-md col-lg">
                            <li class="nav-item">
                                <a class="nav-link navTema" href="./index.php" id="anterior">Tarea 13 A</a>
                            </li>
                        </div>
                    </ul> 
                </div>
            </nav>

            <main>

                <div style="border: 1px black solid; margin: 10px;">

                    <h3 style="text-align: center">Interfaz Usuario</h3>

                    <?php

                        // Verificar que la conexión se realiza correctamente
                        if ($con -> connect_error) {
                            echo "Error en la conexión con la Base de Datos: " . $con -> connect_error;
                            exit;

                        } else {

                            if (existe("crear")) {
                                
                                if (crearScript($con, './tienda.sql')) {
                                    echo "<input id='crearBD' type='hidden'>";
                                }
                            }
    
                            if (existe("leer")) {                        
                                header('Location: ./LeerTabla.php');
                                exit;
    
                            } elseif (existe("insertar")) {
                                header('Location: ./InsertarRegistro.php');
                                exit;
                            }
    
                            try {
    
                                // Iniciamos la conexion
                                $con -> connect(IP, USER, PASS);
        
                                echo '<form action="" method="post" name="formularioT13" enctype="multipart/form-data">';
        
                                if (!comprobarBD($con, 'tienda')) {
                                    echo "<input type='submit' id='crearBD' value='Crear BBDD' name='crear'>";
                                }
                                
                                    
                            } catch (\Throwable $th) {
                                switch ($th->getCode()) {
                                    // Manejo de errores según tu código
                                }
                            
                                mysqli_close($con);
                            }      
                        }
                    ?>

                    <form action="./interfazUsuario.php" method="post" name="formularioT13" enctype="multipart/form-data" target="_blank">

                        <input type="submit" value="Leer Tabla" name="leer">
                        <input type="submit" value="Insertar Registro" name="insertar">

                    </form>
                </div>
            </main>

            <?php

                include("../../../html/footer.html");
            ?>
        </div>
            
            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>

</html>