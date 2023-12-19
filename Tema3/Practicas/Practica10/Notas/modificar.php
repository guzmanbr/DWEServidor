<?php
    require('validar.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
        <title>Editar</title>
    </head>

    <body>
        <?php
            $arrayNotas = array();
            if (($fp = fopen('notas.csv', 'r')) !== false) {
                while (($notas = fgetcsv($fp, 0, ";")) !== false) {
                    array_push($arrayNotas, $notas);
                }
                fclose($fp);
            }
            
        ?>
        <main>
        
            <?php
                echo"<pre>";
                print_r($arrayNotas);
                
                if (valido()){
                    $arrayNotas[$idAlumno][1]=$_REQUEST['nota1'];
                    $arrayNotas[$idAlumno][2]=$_REQUEST['nota2'];
                    $arrayNotas[$idAlumno][3]=$_REQUEST['nota3'];
                    if (($fp = fopen('notas.csv', 'w')) !== false) {
                        foreach ($arrayNotas as $celda) {
                            fputcsv($fp, $celda, ";");
                        }
                    }
                    fclose($fp);
                    header('Location: ./index.php');
                    exit();
                } 
                $idAlumno = $_REQUEST['indice'];
            ?>

            <form action="./editar.php" method="post">    
                <input type="hidden" name="indice" value="<?php $idAlumno;?>">
                <p>
                    <label for="idNombre">Nombre: </label><?php echo " ". $arrayNotas[$idAlumno][0]; ?>
                </p>
                <label for="idNota1">Nota 1:</label>
                <input type="text" name="nota1" id="idNota1" value="<?php echo $arrayNotas[$idAlumno][1] ?>">
                <?
                    if (enviado()){
                        if (vacio("nota1")) {
                            ?><span>Nota no introducida, revise</span><?
                        }
                    } 
                ?>
                <label for="idNota2">Nota 2:</label>
                <input type="text" name="nota2" id="idNota2" value="<?php echo $arrayNotas[$idAlumno][2];?>">
                <?
                    if (enviado()){
                        if (vacio("nota2")) {
                            ?><span>Nota no introducida, revise</span><?
                        }
                    } 
                ?>
                <label for="idNota3">Nota 3:</label>
                <input type="text" name="nota3" id="idNota3" value="<?php echo $arrayNotas[$idAlumno][3];?>">
                <?
                    if (enviado()){
                        if (vacio("nota3")) {
                            ?><span>Nota no introducida, revise</span><?
                        }
                    } 
                ?>
                
                <input type="submit" value="Guardar" name="guardar">
            </form>
                    
        </main>
    </body>

</html>