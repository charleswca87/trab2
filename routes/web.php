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
Route::get('/', 'pagecontroller@sales');
Route::get('/sales', 'pagecontroller@sales');
Route::get('/sales/form-adicionar', 'pagecontroller@formAdicionar');
Route::post('/sales/adicionar', 'pagecontroller@adicionar');
Route::get('/sales/excluir/{id}', 'pagecontroller@excluir');
Route::get('/sales/editar/{id}', 'pagecontroller@form_editar');
Route::get('/sales/editar', 'pagecontroller@editar');
