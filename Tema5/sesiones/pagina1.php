<?
    require('./funciones/validaciones.php');
    session_start();
    //comprueba q tiene sesion iniciada
    sesionIniciada();
    //comprueba que tiene permiso para acceder a esta pagina
    permisosPagina(basename($_SERVER['PHP_SELF']));

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina1</title>
</head>
<body>
    <h1>Pagina 1</h1>
    <a href="./logout.php">LogOut</a>
</body>
</html>