<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function generate()
    {
        $pdf = new Pdf();
        return view('producto-tb.reporte', compact('pdf'));

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        for($i=1;$i<=40;$i++)
        $pdf->Cell(0,10,utf8_decode('Imprimiendo línea número ').$i,0,1);
        $pdf->Output();
    }

   
}
