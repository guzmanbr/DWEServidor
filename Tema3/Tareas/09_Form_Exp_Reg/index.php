<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tarea 09 - Formulario y Expresiones Regulares</title>

    <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
        <link rel="stylesheet" href="../../../css/estilos.css">

        <style>
            h6 {
                font-weight: bold;
                margin-top: 30px;
                margin-left: 50px;
            }

            h1 {
                text-align: center;
            }

            p {
                margin-left: 70px;
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

                        <div class="col-md-6 col-lg">
                        <li class="nav-item">
                            <a class="nav-link navTema" href="../index.php" id="anterior">Tareas Tema 3</a>
                        </li>
                        </div>

                        <div class="col-md-6 col-lg">
                        <li class="nav-item">
                            <a class="nav-link navTema" href="./fer.php?">Formulario y Expresiones Regulares</a>
                        </li>                      
                        </div>
                    </ul> 
                </div>
            </nav>

            <main>
                <div style="border: 1px black solid; margin: 10px;">

                    <h3 style="text-align: center">Tarea 09</h3>

                    <h6>1. Genera un formulario que contenga:</h6>

                        <p>
                            a) Nombre: No puede estar vacío y mínimo 3 caracteres.
                        </p>

                        <p>
                            b) Apellidos: No puede estar vacío y mínimo 3 caracteres para el primer apellido, un espacio y mínimo 3 caracteres el segundo.
                        </p>

                        <p>
                            c) Contraseña y repetir contraseña. Al menos 1 Mayúscula, 1 minúscula y 1 número y que coincidan.
                        </p>

                        <p>
                            d) Fecha en un formato que tu elijas. Tipo de input text y además valida mayor de edad.
                        </p>

                        <p>
                            e) DNI: Valida que sea un dni válido: 8 dígitos y una letra y además que sea la letra correcta.
                        </p>
                            
                        <p>
                            f) Correo electrónico: Con expresiones regulares 1 o más caracteres, @, 1 o más caracteres, . y 2 o más caracteres.
                        </p>

                        <p>
                            g) Subir una imagen de perfil. NO está vacía y es un formato jpg, png o bmp.
                        </p>

                        <p>
                            Todos los campos tienen que ser validados, por una librería php.
                            Si hay alguno de los campos del formulario que no están correctos, se muestra un mensaje.
                            Al validar todo, se muestra todos los datos, incluida la foto.
                        </p>
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