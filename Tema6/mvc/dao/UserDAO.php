<?

class UserDao{
    
    //Se hace static para poder utilizar las funciones sin tener que crear instanciar objetos
    public static function findAll(){
        $sql = "select * from Usuario where activo = 1";
        $parametros = array();//findall no necesita parametros pero sin ello da error
        //llamo a la funcion generica
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        $array_usuarios = array();
                //recorre todos los ususarios devolviendo un standar object, el standar object hay que pasarlo a objeto normal
        while ($usuarioStd = $result->fetchObject()) {
            $usuario = new User(
            $usuarioStd->codUsuario,
            $usuarioStd->password,
            $usuarioStd->descUsuario,
            $usuarioStd->fechaUltimaConexion,
            $usuarioStd->perfil,
            $usuarioStd->activo
            );
            array_push($array_usuarios,$usuario);
            print_r($usuario);

        }

        return $array_usuarios;
        //return array con todos los Users
    }

    public static function findById($id){
        $sql = "select * from Usuario where codUsuario = ?";
        $parametros = array($id);
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        if($result->rowCount()==1) {
            $usuarioStd = $result->fetchObject(); 
            $usuario = new User(
            $usuarioStd->codUsuario,
            $usuarioStd->password,
            $usuarioStd->descUsuario,
            $usuarioStd->fechaUltimaConexion,
            $usuarioStd->perfil,
            $usuarioStd->activo
            );
            //print_r($usuario);
            return $usuario;
        }else {
            return null;
        }
    }


    public static function insert($usuario){
        $sql = "insert into Usuario (codUsuario,password,descUsuario,fechaUltimaConexion,activo) values(?,?,?,?,?);";
       
        //Creo a mano el array para meter solo los campos que euiero
        $parametros = array(
        $usuario->codUsuario,
        sha1($usuario->password),
        $usuario->descUsuario,
        $usuario->fechaUltimaConexion,
        $usuario->activo
        );
        
        //sirve si se quieren insertar todos los atributos
        //$parametros = array_values((array)$usuario);
        //unset($parametros['4']);//asi le quitamos el perfil ya que no queremos insertarlo
        //array_pop($parametros);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if ($result->rowCount() > 0) {            
            return true;
        }else{
            return false;
        }

    }


    public static function update($usuario){

        $sql = "update Usuario set  descUsuario=?, fechaUltimaConexion=?, perfil = ?, activo = ?  where codUsuario = ?;";
        
        //insertar todos los atributos en el array en el orden de la consulta
        $parametros = array(
        $usuario->descUsuario,
        $usuario->fechaUltimaConexion,
        $usuario->perfil,
        $usuario->activo,
        $usuario->codUsuario
        );
        
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if ($result->rowCount() > 0) {            
            return true;
        }else{
            return false;
        }

    }

    public static function cambiarPassword($codUsuario, $password) {
        $sql = "UPDATE Usuario SET password = ? WHERE codUsuario = ?";
        $password = sha1($password);
        $parametros = array($password, $codUsuario);
        $result = FactoryBD::realizaConsulta($sql, $parametros);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public static function delete($usuario){

        $sql = "update Usuario set activo = false where codUsuario = ?;";
        
        //insertar todos los atributos en el array en el orden de la consulta
        $parametros = array($usuario->codUsuario);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if ($result->rowCount() > 0) {            
            return true;
        }

    }


    public static function activar($usuario){

        $sql = "update Usuario set activo = true where codUsuario = ?;";
        //insertar todos los atributos en el array en el orden de la consulta
        $parametros = array($usuario->codUsuario);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if ($result->rowCount() > 0) {            
            return true;
        }

    }

    //findByDescUsuario
    public static function buscarPorNombre($nombre){
        $sql = "select * from Usuario where descUsuario like ?";
        $nombre = '%'.$nombre.'%';
        $parametros = array($nombre);

        $result = FactoryBD::realizaConsulta($sql,$parametros);

        if($result->rowCount() > 0) {
            $usuarioStd = $result->fetchObject(); 
            $usuario = new User(
            $usuarioStd->codUsuario,
            $usuarioStd->password,
            $usuarioStd->descUsuario,
            $usuarioStd->fechaUltimaConexion,
            $usuarioStd->perfil,
            $usuarioStd->activo
            );
            print_r($usuario);
            return $usuario;
        }else {
            return null;
        }
    }

    //validar usuario
    public static function validarUsuario($nombre,$pass){
        $sql = "select * from Usuario where descUsuario = ? and password = ? and activo = true";
        $pass = sha1($pass);
        $parametros = array($nombre,$pass);
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        if($result->rowCount()==1) {
            $usuarioStd = $result->fetchObject(); 
            $usuario = new User(
            $usuarioStd->codUsuario,
            $usuarioStd->password,
            $usuarioStd->descUsuario,
            $usuarioStd->fechaUltimaConexion,
            $usuarioStd->perfil,
            $usuarioStd->activo
            );
            //print_r($usuario);
            return $usuario;
        }else {
            return null;
        }
    }
}

