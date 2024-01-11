<?

class UserDao{
    
    //Se hace static para poder utilizar las funciones sin tener que crear instanciar objetos
    public static function findAll(){
        $sql = "select * from Usuario";
        $parametros = array();//findall no necesita parametros pero sin ello da error
        //llamo a la funcion generica
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        $array_usuarios = array();
        while ($usuario = $result->fetchObject()) {
            print_r($usuario);
        }

        return $array_usuarios;
        //return array con todos los Users
    }

    public static function findById($id){
        //return un objeto usuario
    }
}

