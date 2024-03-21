<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CategoriaController;
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

/*  PERFIL    */
Route::get('/{id}/perfil/list', [UserController::class, 'show'])->name('perfilView');
Route::put('/{id}', [UserController::class, 'update'])->name('userUpdate');

/*  RESOURCE MARCAS  */
Route::get('/marcas/list', [MarcaController::class, 'index'])->name('marcaList');
Route::get('/marcas/create', [MarcaController::class, 'create'])->name('marcaCreate');
Route::post('/marcas/create', [MarcaController::class, 'store'])->name('createMarca');
Route::get('/marcas/{id}/edit', [MarcaController::class, 'edit'])->name('marcaEdit');
Route::put('/marcas/{id}', [MarcaController::class, 'update'])->name('marcaUpdate');
Route::delete('/marcas/list/{id}', [MarcaController::class, 'destroy'])->name('marcaDelete');

/*  RESOURCE CATEGORIAS */
Route::get('/categorias/list', [CategoriaController::class, 'index'])->name('categoriaList');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categoriaCreate');
Route::post('/categorias/create', [CategoriaController::class, 'store'])->name('createCategoria');
Route::get('/categorias/{id}/edit', [CategoriaController::class, 'edit'])->name('categoriaEdit');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categoriaUpdate');
Route::delete('/categorias/list/{id}', [CategoriaController::class, 'destroy'])->name('categoriaDelete');

/*  RESOURCE USUARIOS   */
Route::get('/usuarios/list', [UserController::class, 'index'])->name('usuarioList');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('usuarioCreate');
Route::post('/usuarios/create', [UserController::class, 'store'])->name('createUsuario');


