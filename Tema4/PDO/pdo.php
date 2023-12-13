<?

require('./confBD.php');

//cero dns con la direcion y la base de datos
$DSN = 'pgsql:host='.IP.';dbname=prueba';
//*consulta
try {
    //Se establece conexion con la bd
    $con = new PDO($DSN,USER,PASS);
    $sql = 'select * from tiempo';
    //guardo el resutado de la consulta
    $result = $con->query($sql);
    while ($row = $result->fetch(pdo::FETCH_BOTH)) {
        echo "<br> El tiempo es ".$row[1]." y hay ".$row[2]." grados." ;
    }


} catch (PDOException $e) {
    echo $e->getMessage();
}finally{
    unset($con);
}


//*insert
try {
    //Se establece conexion con la bd
    $con = new PDO($DSN,USER,PASS);
    //creo la sentencia
    $sql = 'insert into tiempo(descripcion,grados) values(?,?)';
    //preparo la sentencia para ejecutarla
    $stmt = $con->prepare($sql);
    //ejecuto la sentencia con los datos q quiero //comento para que no siga insertando cada vez que refresco
    //$stmt->execute((array('Hace niebla',5)));
    

} catch (PDOException $e) {
    echo $e->getMessage();
}finally{
    unset($con);
}


//*insert distinto
try {
    //Se establece conexion con la bd
    $con = new PDO($DSN,USER,PASS);
    //creo la sentencia
    $sql = 'insert into tiempo(descripcion,grados) values(:desc,:grad)';
    //preparo la sentencia para ejecutarla
    $stmt = $con->prepare($sql);
    //bindeo los parametros al valor que quiero
    // es necesario crear una variable antes con su valor no insertarlo directamente
    $desc="esta nevando";
    $grad = 0;
    $stmt->bindParam(':desc',$desc);
    $stmt->bindParam(':grad',$grad);
    //solo ejecuto //comento para que no siga insertando cada vez que refresco
    //$stmt->execute();


} catch (PDOException $e) {
    echo $e->getMessage();
}finally{
    unset($con);
}


//*consulta con bidncolumn
try {
    //Se establece conexion con la bd
    $con = new PDO($DSN,USER,PASS);
    //creo la sentencia
    $sql = 'select * from tiempo where grados < 5';
    $stmt = $con->prepare($sql);
    $stmt->execute();
    //le pongo nombre a las columnas para saber con cual trabao.
    $stmt->bindColumn(2,$desc);
    $stmt->bindColumn(3,$grados);

    while ($row = $stmt->fetch(pdo::FETCH_BOUND)) {
        echo "<br><br><br> El tiempo es ".$desc." y hay ".$grados." grados." ;
    }
    

} catch (PDOException $e) {
    echo $e->getMessage();
}finally{
    unset($con);
}

