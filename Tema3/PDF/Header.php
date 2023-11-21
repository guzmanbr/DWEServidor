<?

class HeaderClase extends FPDF {
    //creo la funcion header
    function Header(){
        //le doy fuente
        $this->SetFont('Courier','B',20);//familia,estilo,tamaño
        $this->SetTextColor(100,80,200);
        $this->SetX(60);//para centrarlo
        //añado texto
        $this->Write(5,"DEWS IES Claudio Moyano");
        
        $this->Ln();//ANADE UN SALTO DE LINEA
        $this->Ln();

        
    }



    function Footer(){
        //fuente
        $this->SetFont('Courier','B',20);//familia,estilo,tamaño
        $this->SetTextColor(100,80,200);//color
        $this->SetY(-20);//para ponerlo abajo
        $this->SetX(-20);//para ponerlo a la izquierda
        //añado texto
        $this->Write(5,$this->PageNo());

    }
}

?>