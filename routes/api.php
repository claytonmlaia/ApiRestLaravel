<?php



Route::group(['middleware' => ['guest:api']], function () {
    Route::get('/', function () {
        return 'olá mundo API';
    });
    Route::post('login', 'API\LoginController@login');
});

Route::group(['middleware' => 'auth:api'], function (){
   Route::get('/dados', function (){
       return 'Olá mundo API (Autenticado)';
   });
   Route::get('logout', 'API\LoginController@logout');
});






// endereço da api clientes: http://127.0.0.1:8000/api/listaClientes
Route::apiResource('listaClientes','API\ClientesController');
