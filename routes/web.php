	<?php

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

Route::get('/', function () {
    return view('form_login');
});
Route::get('/produtos','ProdutoController@lista');
Route::get('/produtos/mostra/{id}','ProdutoController@mostra')->where('id','[0-9]+');
Route::get('/produtos/remove/{id}','ProdutoController@remove')->where('id','[0-9]+');
Route::get('/produtos/novo','ProdutoController@novo');
Route::get('/produtos/edita/{id}','ProdutoController@edita')->where('id','[0-9]+');
Route::post('/produtos/adiciona','ProdutoController@adiciona');
Route::post('/produtos/atualiza/{id}','ProdutoController@atualiza')->where('id','[0-9]+');
Route::get('/produtos/json','ProdutoController@returnJson');

Route::get('/login','LoginController@form');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');


Route::get('/register','UserController@form');
Route::post('/usuarios/registrar','UserController@registrar');
