<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>tabla notas</title>
        <style>

            span {
                display: inline;
                padding: 10px;
                margin: 1px;
            }
            table {
                margin: auto;
            }
            td {
                padding: 16px;
                text-align: center;
                border: gray 1px solid;
            }
            th {
                padding: 10px;
                text-align: center;
                border: gray 1px solid;
            }
            thead td {
                font-weight: bold;
            }

            p {
                text-align: center;
            }

        </style>
    </head>

    <body>
        <header>
            <h2>Lista notas</h2>
        </header>
        <main>
            <table align="center" border="1px solid black">
                <tr>
                    <th>Alumno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Editar</th>
                </tr>
                <?php
                    if (($fp = fopen('notas.csv', 'r')) !== false) {
                        $conta = 0;
                        while (($datos = fgetcsv($fp, 0, ";")) !== false) {
                            echo "<tr>";
                            foreach ($datos as $alumno => $value) {
                                echo '<td>'.$value.'</td>';
                            }
                            echo "<td><a href='modificar.php?indice=".$conta."'>Editar</a></td></tr>";
                            $conta++;
                        }
                        fclose($fp);
                    }
                ?>
                
            </table>
        </main>
    </body>

</html>