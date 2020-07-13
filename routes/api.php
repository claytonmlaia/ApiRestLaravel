<?php

use Illuminate\Http\Request;




Route::post('register','AuthController@register');
Route::post('login', 'AuthController@login');

// endereço da api clientes: http://127.0.0.1:8000/api/listaClientes
Route::apiResource('listaClientes','API\ClientesController');
