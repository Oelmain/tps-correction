<?php

use App\Http\Controllers\PicsController;
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


Route::get("/test" , function(){
    return "test ajax";
});

Route::get('/testAxios' , function(){
    return "test Axios";
});
Route::get('/' , [PicsController::class , "index"])->name("index");
Route::post('/avatar' , [PicsController::class , "SaveAvatar"])->name("saveAvatar");

Route::post('/SaveCookie' , [PicsController::class , "saveCookie"]);
Route::post('/' , [PicsController::class , "saveSession"])->name("saveSession"); 
