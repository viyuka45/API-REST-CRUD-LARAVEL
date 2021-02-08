<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//--------------------------------------------------------------------------

Route::get('/status', 'App\Http\Controllers\Api\BibliotecaController@status');

//Rotas para Cadastrar,Listar,Editar e Deletar livro
Route::prefix('livro')->group(function(){
    //Adicionar um novo livro
    Route::post('/add', 'App\Http\Controllers\Api\BibliotecaController@add_livro');
    //Listar todos os livros
    Route::get('/list', 'App\Http\Controllers\Api\BibliotecaController@list_livro');
    //Encontrar um livro especifico
    Route::get('/find/{id}', 'App\Http\Controllers\Api\BibliotecaController@select_livro');
    //Editar livro ja existente
    Route::put('/edit/{id}', 'App\Http\Controllers\Api\BibliotecaController@update_livro');
    //Deletar livro existente
    Route::delete('/delete/{id}', 'App\Http\Controllers\Api\BibliotecaController@delete_livro');
});

//Rotas para Cadastrar,Listar,Editar e Deletar Autor
Route::prefix('autor')->group(function(){
    //Adicionar um novo autor
    Route::post('/add', 'App\Http\Controllers\Api\BibliotecaController@add_autor');
    //Listar todos os autores
    Route::get('/list', 'App\Http\Controllers\Api\BibliotecaController@list_autor');
    //Encontrar um autor especifico
    Route::get('/find/{id}', 'App\Http\Controllers\Api\BibliotecaController@select_autor');
    //Editar um autor existente
    Route::put('/edit/{id}', 'App\Http\Controllers\Api\BibliotecaController@update_autor');
    //Deletar um livro existente
    Route::delete('/delete/{id}', 'App\Http\Controllers\Api\BibliotecaController@delete_autor');
});
