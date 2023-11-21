<?

class HeaderClase extends FPDF {
    //creo la funcion header
    function Header(){
        
        $this->Image('./imagen.jpg',10,10,35,35);//nombre, posicion, ancho alto
        //Nombre
        $this->SetFont('Courier','B',25);//familia,estilo,tamaño
        //$this->SetTextColor(100,80,200);//color
        $this->setY(9);
        $this->SetX(50);//centro
        $this->Write(10,"FootShop");
        $this->Ln();//ANADE UN SALTO DE LINEA
        //datos
        $this->SetX(50);//centro
        $this->SetFont('Courier','B',10);//familia,estilo,tamaño
        $this->SetTextColor(118,28,28);//color
        $this->Write(5,"Guzman Benito Rodriguez");
        $this->Ln();
        $this->SetX(50);//centro
        $this->Write(5,"DIF/NIF: 77777777K");
        $this->Ln();
        $this->SetX(50);//centro
        $this->Write(5,"Calle Paraiso n7");
        $this->Ln();
        $this->SetX(50);//centro
        $this->Write(5,"CP 14700");
        $this->Ln();
        $this->SetX(50);//centro
        $this->Write(5,"Cordoba Espana");
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