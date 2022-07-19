<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;
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
    return view('welcome');
});
/*
son otras formas

Route::get('/socio', function () {
    return view('socio.index');
});

Route::get('/socio/create',[SocioController::class,'create']);
*/



Route::resource('socio', SocioController::class)->middleware('auth');
Auth::routes();

/*
Route::resource('ficha_medica','App\Controller\Ficha_MedicaController');
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




