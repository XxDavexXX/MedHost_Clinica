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



Route::view('/','welcome');

Route::get('/layoutheader', function () {
    return view('layoutsmedhost.header'); 
});

Route::get('/layoutfooter', function () {
    return view('layoutsmedhost.footer'); 
});


Route::view('/medhost_home', 'MedHostPublic.home')->name('Home_MedHost');
Route::view('/medhost_contactanos', 'MedHostPublic.contactanos')->name('Contact_MedHost');
Route::view('/medhost_servicios', 'MedHostPublic.servicios')->name('Servicios_MedHost');
Route::view('/medhost_overview','MedHostPublic.overview')->name('Team_MedHost');
Route::view('/medhost_about_our_team','MedHostPublic.about_our_team')->name('OurTeam_MedHost');
Route::view('/medhost_especialidades','MedHostPublic.especialidades')->name('Especialidades_MedHost');
Route::view('/register_user', 'auth.register')->name('Register_User');
Route::view('/Login_User', 'auth.login' )->name('Login_User');


Route::middleware([
    'auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::resource('/productos', ProductoController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
