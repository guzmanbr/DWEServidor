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


    <h1>Formulario Fichero</h1>
    <br>

    <form action="subir.php" method="post" name="formulario1" enctype="multipart/form-data">

        <h6>Fichero:</h6>
        <input type="file" name="fichero" id="">
        <br><br>
        <input type="submit" value="Enviar" name="enviar">

    </form>

</body>
</html>