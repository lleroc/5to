<?php
require('./fpdf/fpdf.php');
require_once("../../controllers/tipo_servicio.controllers.php?op=todos");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Lista de Tipo de Servicios de Mecanica');
$pdf->Ln(20);
$pdf->SetFont('Arial','B',12);
$datos = array();
$numero = 10;
$datos = $Tipo_Servicio->todos();
        $datoshtml = array();
        while ($row = mysqli_fetch_assoc($datos)) {
           $pdf->Cell(40,20,$row["id_tipo_servicio"]);
           $pdf->Cell(40,30,$row["detalle"]);
           $pdf->Cell(40,40,$row["detalle"]);
              $pdf->Cell(40,50,$row["valor"]);
              $pdf->Cell(40,60,$row["estado"] ? 'Activo' : 'Inactivo'); 
           
        }



$pdf->Output();


