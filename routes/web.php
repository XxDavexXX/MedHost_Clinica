<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layoutheader', function () {
    return view('layoutmedhost.header'); 
});


Route::get('/medhost',function(){
    return view('MedHostPublic.index');
});

Route::get('/register_user', function () {
    return view('auth.register');
});

Route::middleware([
    'auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::resource('/productos', ProductoController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
