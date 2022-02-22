<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::get('users/inserir', function(){
    return "Página de Inserir produto";
});

Route::get('users/{nome}/{valor?}', function($nome, $valor=null){
    if($valor){
        return "O nome do produto é $nome, e seu valor é $valor";
    }else{
        return "O nome do produto é $nome";
    }
});

Route::get('users/{nome}/{valor}', function($nome, $valor){
    return "O nome do produto é $nome, e seu valor é $valor";
});

Route::get('users', function(){
    return "usuario";
});

