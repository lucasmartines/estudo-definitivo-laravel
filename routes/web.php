<?php

use App\Http\Controllers\CarroController;
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

Route::get("/" , [ CarroController::class , "index"] ) ->name("carro");
Route::get("/salvar_carro" , [ CarroController::class , "salvar_carro"] )->name("salvar_carro_page");
Route::post("/salvar" , [ CarroController::class , "salvar"] )->name("post_salvar_carro");


Route::get('/antes', function () {

   // $carros = DB::table("carros")->get();
    $carros =   Carro::all(); 
    $um_carro = Carro::find(1);
    
    if($um_carro){  $um_carro = $um_carro->first(); }


    return view('hello', ["carros" => $carros ]);
});

Route::get("/here" , function(){

    $nome = "Lucas";
    $x = <<<HTML

        <h2> Olá seus tonto meu nome $nome </h2> 
        <p> é legal usar esse método para ter o higlhlight </p>

    HTML;

    echo $x;
});


