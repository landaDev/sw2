<?php

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\HorarioController;

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
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});
// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('personal','\App\Http\Controllers\PersonalController');
Route::get('nuevoPersonal',[\App\Http\Controllers\PersonalController::class,'nuevoPersonal']);

Route::resource('cliente','\App\Http\Controllers\ClienteController');
Route::get('nuevoCliente',[\App\Http\Controllers\ClienteController::class,'nuevoCliente']);


Route::resource('paciente','\App\Http\Controllers\PacienteController');
Route::get('nuevoPaciente',[\App\Http\Controllers\PacienteController::class,'nuevoPaciente']);


Route::resource('control','\App\Http\Controllers\ControlController');
Route::get('metrica',[\App\Http\Controllers\ControlController::class,'metrica']);
Route::get('padres',[\App\Http\Controllers\ControlController::class,'padres']);

// Route::post('guardarp',[\App\Http\Controllers\ControlController::class,'guardarp']);
Route::post('/guardarPadres', 'ControlController@guardarp')->name('guardarPadres');

Route::get('receta',[\App\Http\Controllers\ControlController::class,'receta']);
Route::get('vacuna',[\App\Http\Controllers\ControlController::class,'vacuna']);


Route::resource('cita','\App\Http\Controllers\CitaController');
Route::get('historial',[\App\Http\Controllers\CitaController::class,'historial']);
Route::get('notificacion',[\App\Http\Controllers\CitaController::class,'notificacion']);
Route::get('reserva',[\App\Http\Controllers\CitaController::class,'reserva']);
Route::resource('horario','\App\Http\Controllers\HorarioController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');
