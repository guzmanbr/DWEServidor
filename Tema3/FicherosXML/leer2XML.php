<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MostrarJuegos</title>
</head>
<body>
    <h1>Juegos</h1>
    <table border="1">
        <thead>
            <th>Nombre</th>
            <th>Id</th>
            <th>Disponibilidad</th>
            <th>Dispositivos</th>

            
        </thead>
        <?php
            //Podemos no saber el nombre de las etiquetas
            if (file_exists('juegos.xml')) {
                $xml = simplexml_load_file('juegos.xml');//cargo el fichero

                foreach ($xml as $elemento) {
                    leerElemento($elemento);
                }
            
            } else {
                exit('Error abriendo ficheroXML.xml.');
            }


            function leerElemento($juego){

        
                if ($juego['disponible'] == "si") {
                    
                    echo "<tr>";
                    
                        echo "<td>".$juego->nombre."</td>";
                        foreach($juego->attributes() as $nombre => $valor) {
                            echo "<td>".$valor."</td>";
                        }
                        echo "<td>";
                            foreach ($juego->children() as $dispositivos => $dispositivo) {
                                echo $dispositivos."<br>";
                            }
                        echo "</td>";

                    echo "</tr>";
                }

                

                // echo "<tr>";
                // echo "<td>". $elemento->children()[0]."</td>";
                // echo "<td>". $elemento->children()[2]."</td>";
                // echo "</tr>";
            }

        ?>
        
    </table>
</body>
</html>