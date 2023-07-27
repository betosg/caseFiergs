<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/', 'App\Http\Controllers\ProdutosController@listAll')->name('produtos-lista');

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::get('/register', 'App\Http\Controllers\RegisterController@show')->name('register.show');
    Route::post('/register', 'App\Http\Controllers\RegisterController@register')->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', 'App\Http\Controllers\LoginController@show')->name('login.show');
    Route::get('/login', 'App\Http\Controllers\LoginController@show')->name('login');
    Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login.perform');

    //rotas referente a produtos
    //Route::get('/produtos/lista','App\Http\Controllers\ProdutosController@listAll');

});


Route::middleware(['auth'])->group(function () {
    ///rotas referente a produtos

     Route::get('/produtos/lista','App\Http\Controllers\ProdutosController@listAll')->name('produtos-lista');
     //Route::post('/produtos/lista/','App\Http\Controllers\ProdutosController@listSearch')->name('produtos-lista-filtra');
        Route::get('/produtos/cadastro','App\Http\Controllers\ProdutosController@create');
        Route::post('/produtos/cadastro','App\Http\Controllers\ProdutosController@save')->name('registra-produto');
        Route::get('/produtos/show/{id}','App\Http\Controllers\ProdutosController@find');
        Route::get('/produtos/edit/{id}','App\Http\Controllers\ProdutosController@edit');
        Route::post('/produtos/edit/{id}','App\Http\Controllers\ProdutosController@update')->name('edita-produto');
        Route::get('/produtos/delete/{id}','App\Http\Controllers\ProdutosController@delete');
        Route::post('/produtos/delete/{id}','App\Http\Controllers\ProdutosController@destroy')->name('exclui-produto');

        //rotas referente a categorias
     Route::get('/categorias/lista','App\Http\Controllers\CategoriasController@listAll');
        Route::get ('/categorias/cadastro','App\Http\Controllers\CategoriasController@create');
        Route::post('/categorias/cadastro','App\Http\Controllers\CategoriasController@save')->name('registra-categoria');
        Route::get ('/categorias/show/{id}','App\Http\Controllers\CategoriasController@find');
        Route::get ('/categorias/edit/{id}','App\Http\Controllers\CategoriasController@edit');
        Route::post('/categorias/edit/{id}','App\Http\Controllers\CategoriasController@update')->name('edita-categoria');
        Route::get ('/categorias/inativa/{id}','App\Http\Controllers\CategoriasController@inativa');
        Route::post('/categorias/inativa/{id}','App\Http\Controllers\CategoriasController@inativaUpd')->name('inativa-categoria');

    Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');

});



