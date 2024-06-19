<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;

use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
class PDFController extends Controller
{
    public function generatePDF()
    {
        $products = Product::all();
        $data = ['title' => 'domPDF in Laravel 10' , "products"=>$products];
        $pdf = Pdf::loadView('document.product', $data);
        return $pdf->download('document.pdf');
    }
}