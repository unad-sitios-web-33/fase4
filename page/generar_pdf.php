<?php
require('../libs/fpdf183/fpdf.php'); 
include_once("../utility/dbconect.php");

class PDF extends FPDF
{
function Header()
{

$this->SetFont('Arial','B',13);
$this->Cell(1);
$this->Cell(95,15,'Lista de productos disponibles',1,0,'C');
$this->Ln(30);
}
function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$db = new dbConexion();
$connString =  $db->getConexion();
$display_heading = array('product_code'=>'Codigo producto', 'product_name'=> 'Nombre del producto', 'product_quantity'=> 'Cantidad',);
$result = mysqli_query($connString, "SELECT product_code, product_name, product_quantity FROM tabla33") or die("database error:". mysqli_error($connString));
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$w = array(45,45,20);
$pdf->Cell(45,12,'Codigo del producto',1);
$pdf->Cell(45,12,'Nombre del producto',1);
$pdf->Cell(20,12,'Cantidad',1);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
foreach($result as $row)
{
$pdf->Cell($w[0],6,$row['product_code'],1);
$pdf->Cell($w[1],6,$row['product_name'],1);
$pdf->Cell($w[2],6,number_format($row['product_quantity']),1);
$pdf->Ln();
}
$pdf->Output();

?>
