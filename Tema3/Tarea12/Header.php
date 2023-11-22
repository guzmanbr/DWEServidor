<?

class HeaderClase extends FPDF {
    //creo la funcion header
    function Header(){
        
        $this->Image('./logo.jpg',6,11,38,38);//nombre, posicion, ancho alto
        //Nombre
        $this->SetFont('Courier','',25);//familia,estilo,tamaño
        $this->setY(10);
        $this->SetX(50);//centro
        $this->Write(10,"SneakerShop");
        $this->Ln();//ANADE UN SALTO DE LINEA
        //datos
        $this->setY(22);
        $this->SetX(50);//centro
        $this->SetFont('Courier','',12);//familia,estilo,tamaño
        $this->Write(5,utf8_decode("Guzmán Benito Rodríguez"));
        $this->Ln();
        $this->SetX(50);//centro
        $this->Write(5,"DIF/NIF: 77777777K");
        $this->Ln();
        $this->SetX(50);
        $this->Write(5,"Calle Paraiso n7");
        $this->Ln();
        $this->SetX(50);//centro
        $this->Write(5,"CP 14700");
        $this->Ln();
        $this->SetX(50);//centro
        $this->Write(5,utf8_decode("Cordoba España"));
        $this->SetLineWidth(0.5);
        $this->Line( 118, 9, 118, 52);
    }



    function Footer(){
        //fuente
        $this->SetFont('Courier','',20);//familia,estilo,tamaño
        $this->SetY(-20);//para ponerlo abajo
        $this->SetX(80);//para ponerlo a la izquierda
        //añado texto
        $this->Write(5,"SneakerShop");
        $this->SetX(-20);//para ponerlo abajo
        $this->Write(5,$this->PageNo());

    }
}

?>