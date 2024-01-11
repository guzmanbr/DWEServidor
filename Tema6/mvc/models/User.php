<?

class User {

    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numAccesos;
    private $fechaUltimaConexion;
    private $perfil;//rol

    //Constructor
    function __construct($codUsuario,$password,$descUsuario,$fechaUltimaConexion,$perfil){
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->fechaUltimaConexion = $fechaUltimaConexion;
        $this->perfil = $perfil;
    }

    //Get Set
    public function __get($att){
        if (property_exists(__CLASS__,$att)) {
            return $this->$att;
        }else{
            echo "No existe el atributo";
        }
    }
    public function __set($att, $val){
        if (property_exists(__CLASS__,$att)) {
            $this->$att = $val;
        }else{
            echo "No existe el atributo";
        }
        
    }

}






?>