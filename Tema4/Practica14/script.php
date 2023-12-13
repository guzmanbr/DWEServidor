<?
require('./confBD.php');

//cero dns con la direcion y la base de datos
$DSN = 'pgsql:host='.IP.';dbname=prueba';
//*consulta
try {
    //Se establece conexion con la bd
    $con = new PDO($DSN,USER,PASS);
    //creo la bd
    $sql = 'create database productos';
    //guardo el resutado de la consulta
    $result = $con->query($sql);
    //ejecuta script
    $DSN = 'psql:host='.IP.'dbname=productos';
    $con = new PDO($DSN,USER,PASS);
    $sql = file_get_contents('./PoductosBD');
    $result = $con->exec($sql);
    
} catch (PDOException $e) {
    echo $e->getMessage();
}finally{
    unset($con);
}
