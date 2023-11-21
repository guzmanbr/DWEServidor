<?

require ('../../fpdf186/fpdf.php');
require ('./Header.php');

//creo nuevo objeto de FPDF

$pdf = new HeaderClase();

$pdf->AddPage();
//Se genera header automaticamente
//añado una fuente
$pdf->SetFont('Courier','B',20);//familia,estilo,tamaño
//escribir en la pagina
$pdf->Write(5,"Hola Mundo");//altura,texto,link

//$pdf->GetPageWidth();//ancho de la pagina

//Añado otra pagina
$pdf->AddPage();
//añadir imagen
$pdf->Image('./imagen.jpg',50,20,120,90);//nombre, posicion, ancho alto

//Añado otra pagina
$pdf->AddPage();
//ancho,alto,texto,borde(0-1),posicion de celda (0-1-2),alineacion texto, color, link
$pdf->Cell(50,10,"Prueba 1",1,0,'C',false);
$pdf->Cell(50,10,"Prueba 2",1,0,'C',false);
$pdf->Cell(50,10,"Prueba 2",1,1,'C',false);
$pdf->Cell(50,10,"Prueba 2",1,0,'C',false);
$pdf->Cell(50,10,"Prueba 2",1,2,'C',false);
$pdf->Cell(50,10,"Prueba 2",1,0,'C',false);


//Otra pagina
$pdf->AddPage();

$array = array(
    array('pc1','Lenovo','1TB','4Gb RAM'),
    array('pc2','Asus','2TB','8Gb RAM'),
    array('pc3','Mac','2TB','4Gb RAM'),
    array('pc4','Hp','1TB','8Gb RAM'),
);

crearTabla($array,$pdf);



$pdf->Output();//Guardo

function crearTabla($array,$pdf){


    $pdf->SetFillColor(0,180,255);
    //Creamos la cabecera
    $pdf->Cell(45,10,"PC",1,0,'C',true);
    $pdf->Cell(45,10,"MARCA",1,0,'C',true);
    $pdf->Cell(45,10,"Disco Duro",1,0,'C',true);
    $pdf->Cell(45,10,"RAM",1,0,'C',true);
    $pdf->Ln();//salto

    //por cada pc una fila
    foreach ($array as $row) {
        //en cada fila vamos rellenando las celdas
        foreach ($row as $dato) {
            $pdf->Cell(45,10,$dato,1,0,'C',false);
        }
        $pdf->Ln();
    }


}




?>