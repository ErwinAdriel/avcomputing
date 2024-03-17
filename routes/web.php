<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*  INDEX   */

Route::get('/', [AuthController::class, 'index'])->name('app');

/*  LOGIN   */

Route::post('/login', [AuthController::class, 'login'])->name('login');

/*  USUARIO LOGUEADO   */

Route::get('/layout', [AuthController::class, 'logueado'])->name('layout');

/*  CERRAR SESION   */

Route::post('/layout', [AuthController::class, 'logout'])->name('logout');

/*  RESOURCE MARCAS  */


/*eddddddddddddddddddddddd */

Route::get('/list', [MarcaController::class, 'index'])->name('marcaList');

Route::get('/create', [MarcaController::class, 'create'])->name('marcaCreate');

Route::post('/create', [MarcaController::class, 'store'])->name('create');

Route::get('/{id}/edit', [MarcaController::class, 'edit'])->name('marcaEdit');

Route::put('/{id}', [MarcaController::class, 'update'])->name('marcaUpdate');

Route::delete('/{id}', [MarcaController::class, 'destroy'])->name('marcaDelete');

/*  RESOURCE USUARIOS   */

Route::get('/usuarios/list', [UserController::class, 'index'])->name('usuarioList');

Route::get('/usuarios/create', [UserController::class, 'create'])->name('usuarioCreate');

Route::post('/create', [UserController::class, 'store'])->name('create');


/*  PERFIL    */

Route::get('/{id}/perfil/list', [UserController::class, 'show'])->name('perfilView');

Route::put('/{id}', [UserController::class, 'update'])->name('userUpdate');

