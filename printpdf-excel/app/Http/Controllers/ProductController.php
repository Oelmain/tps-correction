<?php
  
namespace App\Http\Controllers;

use App\Exports\ProductsExport;

use App\Imports\ProductsImport;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
  
class ProductController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $products = Product::get();
  
        return view('products', compact('products'));
    }
        
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ProductsImport,request()->file('file'));
               
        return back();
    }
}