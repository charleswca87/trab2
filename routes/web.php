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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'pagecontroller@initial_page');
Route::get('/initial_page', 'pagecontroller@posts');
Route::get('/initial_page/form-adicionar', 'pagecontroller@formAdicionar');
Route::post('/initial_page/adicionar', 'pagecontroller@adicionar');
Route::get('/initial_page/excluir/{id}', 'pagecontroller@excluir');
Route::get('/initial_page/editar/{id}', 'pagecontroller@form_editar');
