<?php



Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Service Container
|--------------------------------------------------------------------------
*/

Route::get('/pay', 'PayOrderController@store');

/*
|--------------------------------------------------------------------------
| Repository Design
|--------------------------------------------------------------------------
*/
Route::get('/customer', 'CustomerController@index');
Route::get('/customer/{id}', 'CustomerController@show');
Route::get('/customer/{id}/update', 'CustomerController@update');