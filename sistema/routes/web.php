<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

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
    return view('auth.login');
});

/*oute::get('/carro', function () {
    return view('carro.index');
});
Route::get('/carro/create',[CarroController::class,'create']);
*/
Route::resource('carro', CarroController::class)->middleware('auth');
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [CarroController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'],function() {
    
    Route::get('/', [CarroController::class, 'index'])->name('home');

});
