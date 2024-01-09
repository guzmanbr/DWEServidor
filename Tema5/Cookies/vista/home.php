<?
require ('../funciones/funcionesBD.php')
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/estilos.css">
    <title>Panaderia</title>
</head>
<body>
    <div class="izq">
        <h1>Productos</h1>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Ver</th>
            </thead>
            <tbody>
                <?
                    $array_prod = findAll();

                    foreach ($array_prod as $prod) {
                        echo "<tr>";
                        echo "<td>".$prod['nombre']."</td>";
                        echo "<td>".substr($prod['descripcion'],0,20)."</td>";
                        echo "<td><img src='../".$prod['baja']."'</td>";
                        echo "<td><a href='verProducto.php?id='".$prod['codigo']."'>Ver</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="der">
        <h1>Ultimos visitados</h1>
        <?
        if (!empty($_COOKIE)) {
            $prod = findById($_COOKIE['id']);
            if ($prod) {
                echo "<a href='verProducto.php?id='".$prod['codigo']."'><img src='../".$prod['baja']."</a>";
            }
        }else {
            echo "No ha visitado ningun producto.";
        }
        ?>
    </div>
    
</body>
</html>