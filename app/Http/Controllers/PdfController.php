<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function show(){
        return view('orders.index', ['Orders' => Orders::all()]);
    }
    public function generatePDF()
    {
        $data = ['title' => 'domPDF in Laravel 10', 'Orders' => Orders::all()];
        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->download('document.pdf');
    }
}
