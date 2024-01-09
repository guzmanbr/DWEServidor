<?
require ('../funciones/funcionesBD.php');
require ('../funciones/funciones.php');
//si no hay un ide vuelve al home
    if (!isset($_GET['id'])) {
        header('Location: home.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver producto</title>
</head>
<body>
    <a href="./home.php">Volver</a>
    <?
    $producto = findById($_GET['id']);
    if ($producto) {
        insertarCookies();
        echo "<h1>".$producto['nombre']."</h1>";
        echo "<p>".$producto['descripcion']."</p>";
        echo "<img src='../".$prod['baja'].">";
    }

    ?>
</body>
</html>
