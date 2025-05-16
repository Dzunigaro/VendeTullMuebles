<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{


    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Movernos a la derecha
    $this->Cell(70,10,'Reporte General de propiedades',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(80,10,'id',1,0,'C',0);
    $this->Cell(80,10,'nombre',1,0,'C',0);
    $this->Cell(80,10,'contrato',1,0,'C',0);
    $this->Cell(80,10,'provincia',1,0,'C',0);
    $this->Cell(80,10,'direccion',1,0,'C',0);
    $this->Cell(80,10,'numcuartos',1,0,'C',0);
    $this->Cell(80,10,'numbano',1,0,'C',0);
    $this->Cell(80,10,'cochera',1,0,'C',0);
    $this->Cell(80,10,'disponible',1,0,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}


require("cn.php");
$consulta = "SELECT * FROM tpropiedades";
$resultado= mysqli_query($conexion,$consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);

while($row=$resultado->fetch_assoc()){
    $pdf->Cell(80,10,$row['id'],1,0,'C',0);
    $pdf->Cell(80,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(80,10,$row['contrato'],1,0,'C',0);
    $pdf->Cell(80,10,$row['provincia'],1,0,'C',0);
    $pdf->Cell(80,10,$row['direccion'],1,0,'C',0);
    $pdf->Cell(80,10,$row['numcuartos'],1,0,'C',0);
    $pdf->Cell(80,10,$row['numbano'],1,0,'C',0);
    $pdf->Cell(80,10,$row['cochera'],1,0,'C',0);
    $pdf->Cell(80,10,$row['disponible'],1,0,'C',0);
}

$pdf->Output();
?>


