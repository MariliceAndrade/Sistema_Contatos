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

Route::get('/admin/cadastros', 'CadastroController@index')->name('admin.cadastros');
Route::get('/admin/cadastros/adicionar', 'Admin\CadastroController@adicionar')->name('admin.cadastros.adicionar');
Route::post('/admin/cadastros/salvar', 'Admin\CadastroController@salvar')->name('admin.cadastros.salvar');
Route::get('/admin/cadastros/editar/{id}', 'Admin\CadastroController@editar')->name('admin.cadastros.editar');
Route::put('/admin/cadastros/atualizar/{id}', 'Admin\CadastroController@atualizar')->name('admin.cadastros.atualizar');
Route::get('/admin/cadastros/deletar/{id}', 'Admin\CadastroController@deletar')->name('admin.cadastros.deletar');
