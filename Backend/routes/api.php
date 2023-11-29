<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/Users', [UserController::class, 'Index']);
Route::get('/users/{user}', [UserController::class, 'Show']);
//Rotas do autor
Route::ApiResource('autor', AutorController::class);
Route::get('/livroSelect/{livros}', ['LivroController@livroSelect']);
//Rota do Livro
Route::apiResource('livro', LivroController::class);
Route::apiResource('emprestimo', EmprestimoController::class);


//Route::get('/autor', [AutorController::class, 'Index']);
//Route::get('/autor/{id}', [AutorController::class, 'Show']);
//Route::post('/autor/', [AutorController::class, 'Store']);
//Route::delete('/autor/{autor}', [AutorController::class, 'Destroy']);
