<?
require('./funciones/confBD.php');

//cero dns con la direcion y la base de datos

function validaUsuario($user,$pass){

    try {
        $DSN = 'mysql:host='.IP.';dbname='.BD;
        //Se establece conexion con la bd
        $con = new PDO($DSN,USER,PASS);
        $sql = 'select * from usuarios where usuario = ? and clave = ?';
        $stmt = $con->prepare($sql);
        $pass = sha1($pass);
        $stmt->execute([$user,$pass]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if($usuario) {
            return $usuario;
        }
        return false;
    
    } catch (PDOException $e) {
        echo $e->getMessage();
    }finally{
        unset($con);
    }
}

function paginas($user,$pass){
    try {
        $DSN = 'mysql:host='.IP.';dbname='.BD;
        //Se establece conexion con la bd
        $con = new PDO($DSN,USER,PASS);
        $sql = 'select codigoPagina from accede where perfil = ? ';
        $stmt = $con->prepare($sql);
        $pass = sha1($pass);
        $stmt->execute([$user,$pass]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if($usuario) {
            return $usuario;
        }
        return false;
    
    } catch (PDOException $e) {
        echo $e->getMessage();
    }finally{
        unset($con);
    }
}

?>