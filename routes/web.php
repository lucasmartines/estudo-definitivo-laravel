<?php

use App\Models\Carro;
use Illuminate\Support\Facades\DB;
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

   // $carros = DB::table("carros")->get();
    $carros =   Carro::all();

    $um_carro = Carro::find(1)->first();
 

    return view('hello', ["carros" => $carros ]);
});


