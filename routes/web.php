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
    return redirect(route('home'), 301);
});

Auth::routes([
    'register' => false
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lang/{locale}', 'App\Http\Controllers\LocalizationController@index');

Route::resource('/company', 'App\Http\Controllers\CompanyController')->middleware('auth');
Route::resource('/employer', 'App\Http\Controllers\EmployerController')->middleware('auth');
