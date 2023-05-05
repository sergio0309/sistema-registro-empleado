<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

// El "/" redireccionara directamente al index
Route::get('/', function () {
    return view('auth.login');
});

//El "." permitira acceder a cualquier elemento que este dentro de la carperta de empleado
Route::get('/empleado', function () {
    return view('empleado.index');
});

//Estamos accediendo al controlador y al metodo create
// Route::get('/empleado/create', [EmpleadoController::class, 'create']);

//Con esta instruccion se puede acceder a todas las URL de empleado
Route::resource('empleado',EmpleadoController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=>false]);  //para desaparecer registro y recordar contraseña

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
} );
