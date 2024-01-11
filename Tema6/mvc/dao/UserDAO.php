<?

class UserDao{
    
    //Se hace static para poder utilizar las funciones sin tener que crear instanciar objetos
    public static function findAll(){
        $sql = "select * from Usuario";
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
            $usuarioStd->perfil
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
            $usuarioStd->perfil
            );
            print_r($usuario);
            return $usuario;
        }else {
            return null;
        }
    }


    public static function insert($usuario){
        $sql = "insert into Usuario (codUsuario,password,descUsuario,fechaUltimaConexion) values(?,?,?,?);";
        //sirve si se quieren insertar todos los atributos
        $parametros = (array)$usuario;
        //unset($parametros['perfil User']);//asi le quitamos el perfil ya que no queremos insertarlo
        array_pop($parametros);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        return true;

    }
}

