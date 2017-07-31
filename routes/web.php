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
use App\Http\Controllers\customer_controller;

Route::get('/', function () {
    return view('welcome');
});

#Customer Data
Route::get('/customer', 'customer_controller@index');
Route::get('/customer/{phoneNumber}', 'customer_controller@getting_data_with_phoneNumber');

#Customer CheckIn Data
Route::get('/customercheckin', 'customerCheckIn_controller@index');
Route::get('/customercheckin/{payType}', 'customerCheckIn_controller@getting_data_with_paytype');

#Customer CheckIn Order Data
Route::get('/customercheckinorder', 'customerCheckInOrder_controller@index');
Route::get('/customercheckinorder/{serviceID}', 'customerCheckInOrder_controller@getting_data_with_serviceid');
