<?php

use Illuminate\Http\Request;




Route::post('register','AuthController@register');
Route::post('login', 'AuthController@login');

Route::middleware('auth:api')->group(function (){
    Route::get('user/{userId}/detail', 'UserController@show');
});






// endereço da api clientes: http://127.0.0.1:8000/api/listaClientes
Route::apiResource('listaClientes','API\ClientesController');
