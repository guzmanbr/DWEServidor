<?

class CitaDao{

    //Se hace static para poder utilizar las funciones sin tener que crear instanciar objetos
    public static function findAll(){
        $sql = "select * from Cita";
        $parametros = array();//findall no necesita parametros pero sin ello da error
        //llamo a la funcion generica
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        $array_citas= array();
                //recorre todos los ususarios devolviendo un standar object, el standar object hay que pasarlo a objeto normal
        while ($citaStd = $result->fetchObject()) {
            $cita = new Cita(
                $citaStd->id,
                $citaStd->especialista,
                $citaStd->motivo,
                $citaStd->fecha,
                $citaStd->activo,
                $citaStd->paciente
            );
            array_push($array_citas,$cita);
        }

        return 
        $array_citas;
        //return array con todos los Users
    }

    public static function findById($id){
        $sql = "select * from Cita where id = ?";
        $parametros = array($id);
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        if($result->rowCount()==1) {
            $citaStd = $result->fetchObject(); 
            $cita = new Cita(
                $citaStd->id,
                $citaStd->especialista,
                $citaStd->motivo,
                $citaStd->fecha,
                $citaStd->activo,
                $citaStd->paciente
            );
            return $cita;
        }else {
            return null;
        }
    }

    public static function insert($cita){
        $sql = "insert into Cita (especialista,motivo,fecha,activo,paciente) values(?,?,?,?,?);";
       
        //Creo a mano el array para meter solo los campos que euiero
        $parametros = array(
        $cita->especialista,
        $cita->motivo,
        $cita->fecha,
        $cita->activo,
        $cita->paciente
        );
        
        //sirve si se quieren insertar todos los atributos
        //$parametros = array_values((array)$cita);
        //unset($parametros['4']);//asi le quitamos el perfil ya que no queremos insertarlo
        //array_pop($parametros);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if ($result->rowCount() > 0) {            
            return true;
        }else{
            return false;
        }
    
    }




    public static function update($cita){

        $sql = "update Cita set especialista=?, motivo=?, fecha = ?, paciente = ?  where id = ?;";

        //insertar todos los atributos en el array en el orden de la consulta
        $parametros = array(
        $cita->especialista,
        $cita->motivo,
        $cita->fecha,
        $cita->paciente,
        $cita->id
        );
        
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if ($result->rowCount() > 0) {            
            return true;
        }else{
            return false;
        }

    }

    
    public static function delete($cita){

        $sql = "update Cita set activo = false where id = ?;";
        
        //insertar todos los atributos en el array en el orden de la consulta
        $parametros = array($cita->id);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if ($result->rowCount() > 0) {            
            return true;
        }

    }

    public static function findByPaciente($usuario){
        $sql = "select * from Cita where paciente = ? and activo =1 and fecha > now() order by fecha";
        $parametros = array($usuario->codUsuario);
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        $array_citas= array();//recorre todos los ususarios devolviendo un standar object, el standar object hay que pasarlo a objeto normal

        while ($citaStd = $result->fetchObject()) {
            $cita = new Cita(
                $citaStd->id,
                $citaStd->especialista,
                $citaStd->motivo,
                $citaStd->fecha,
                $citaStd->activo,
                $citaStd->paciente
            );
            array_push($array_citas,$cita);
        }

        return $array_citas;
        //return array con todos los Users
    }

    
    public static function findByPacienteH($usuario){
        $sql = "select * from Cita where paciente = ? and activo =1 and fecha < now() order by fecha desc";
        $parametros = array($usuario->codUsuario);
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        $array_citas= array();//recorre todos los ususarios devolviendo un standar object, el standar object hay que pasarlo a objeto normal

        while ($citaStd = $result->fetchObject()) {
            $cita = new Cita(
                $citaStd->id,
                $citaStd->especialista,
                $citaStd->motivo,
                $citaStd->fecha,
                $citaStd->activo,
                $citaStd->paciente
            );
            array_push($array_citas,$cita);
        }

        return $array_citas;
        //return array con todos los Users
    }

}



?>