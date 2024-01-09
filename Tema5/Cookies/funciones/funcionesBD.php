<?
require('../funciones/confBD.php');

//cero dns con la direcion y la base de datos

function findAll(){
    try {
        $DSN = 'mysql:host='.IP.';dbname='.BD;
        //Se establece conexion con la bd
        $con = new PDO($DSN,USER,PASS);
        $sql = 'select * from producto';
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $array_productos = array();
        while ($producto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($array_productos,$producto);
        }
        return $array_productos;
    
    } catch (PDOException $e) {
        echo $e->getMessage();
    }finally{
        unset($con);
    }
}

function findById($id){
    try {
        $DSN = 'mysql:host='.IP.';dbname='.BD;
        //Se establece conexion con la bd
        $con = new PDO($DSN,USER,PASS);
        $sql = 'select * from producto where codigo =?';
        $stmt = $con->prepare($sql);
        $stmt->execute(array($id));
        $producto = $stmt->fetch(PDO::FETCH_ASSOC);
        return $producto;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }finally{
        unset($con);
    }
}

?>