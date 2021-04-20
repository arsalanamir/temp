<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::view('/active_issued_certificates', 'active_issued_certificates');
Route::view('/expired_certificates', 'expired_certificates');
Route::view('/stuffed_certificates', 'stuffed_certificates');
Route::view('/license_management', 'license_management');
Route::view('/related_administrators', 'related_administrators');
Route::view('/general_parameters', 'general_parameters');
Route::view('/Certificates_stock', 'Certificates_stock');
Route::view('/brokers', 'brokers');




