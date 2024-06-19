<?php
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/print-pdf',[PDFController::class , 'generatePDF'])->name('print_pdf');

Route::controller(ProductController::class)->group(function(){
    Route::get('products', 'index');
    Route::get('products-export', 'export')->name('products.export');
    Route::post('products-import', 'import')->name('products.import');
});