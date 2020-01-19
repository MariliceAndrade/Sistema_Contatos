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
    return view('login');
});

Route::get('/admin/contatos', 'Admin\ContatoController@index')->name('admin.contatos');
Route::get('/admin/contatos/adicionar', 'Admin\ContatoController@adicionar')->name('admin.contatos.adicionar');
Route::post('/admin/contatos/salvar', 'Admin\ContatoController@salvar')->name('admin.contatos.salvar');
Route::get('/admin/contatos/editar/{id}', 'Admin\ContatoController@editar')->name('admin.contatos.editar');
Route::put('/admin/contatos/atualizar/{id}', 'Admin\ContatoController@atualizar')->name('admin.contatos.atualizar');
Route::get('/admin/contatos/deletar/{id}', 'Admin\ContatoController@deletar')->name('admin.contatos.deletar');
