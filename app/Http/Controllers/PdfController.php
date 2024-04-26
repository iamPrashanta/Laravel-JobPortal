<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'domPDF in Laravel 10', 'Orders' => Orders::all(), 'ending' => 'Thank you for downloading'];
        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->download('document.pdf');
    }
}
