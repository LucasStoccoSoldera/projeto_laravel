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
    return redirect('/login');
})->name('home');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLogin'])->name('login');
Route::post('/login/check', [App\Http\Controllers\LoginController::class, 'check'])->name('login.check');

Route::get('/menu', [App\Http\Controllers\MenuController::class, 'showMenu'])->name('menu');
Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'showUsuario'])->name('usuario');
Route::post('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'createUsuario'])->name('usuario.create');
Route::get('/usuario/edit/{id}', [App\Http\Controllers\UsuarioController::class, 'editUsuario'])->name('usuario.edit');
Route::put('/usuario/update', [App\Http\Controllers\UsuarioController::class, 'updateUsuario'])->name('usuario.update');
Route::delete('/usuario/delete', [App\Http\Controllers\UsuarioController::class, 'deleteUsuario'])->name('usuario.delete');


