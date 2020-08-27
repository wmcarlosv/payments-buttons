<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return redirect()->route('product');
});

$router->group(['prefix' => 'mercadopago'], function () use ($router){
	$router->get('product', ['as' => 'product', 'uses' => 'MercadoPagoController@product']);
	$router->post('setProduct',['as' => 'setProduct', 'uses' => 'MercadoPagoController@setProduct']);
	$router->post('procesar-pago',['as' => 'procesar_pago', 'uses' => 'MercadoPagoController@procesar_pago']);
});
