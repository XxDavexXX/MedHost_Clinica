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
    return view('layoutsmedhost.header'); 
});

Route::get('/layoutfooter', function () {
    return view('layoutsmedhost.footer'); 
});


Route::get('/medhost_home',function(){
    return view('MedHostPublic.home');
});

Route::get('/medhost_contactanos',function(){
    return view('MedHostPublic.contactanos');
});

Route::get('/medhost_servicios',function(){
    return view('MedHostPublic.servicios');
});

Route::get('/medhost_especialidades',function(){
    return view('MedHostPublic.especialidades');
});

Route::get('/medhost_about_our_team',function(){
    return view('MedHostPublic.about_our_team');
});

Route::get('/medhost_overview',function(){
    return view('MedHostPublic.overview');
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
