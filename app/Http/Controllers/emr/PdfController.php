<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index()
    {
        return view('pdf.noikhoa');
        // $data = [1, 2];
        // $pdf = Pdf::loadView('pdf.noikhoa', $data);
        // return $pdf->download('invoice.pdf');
    }

    public function pdf_emr()
    {
        $data = [1, 2];
        PDF::setOption(['dpi' => '150', 'dèaultFont' => 'sans-serif']);
        $pdf = Pdf::loadView('pdf.noikhoa', $data);
        return $pdf->stream('invoice.pdf');
    }
}
