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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    return view('user.user');
})->name('admin');

Route::get('/sobre', function () {
    return view('footer.sobreacomsiv');
})->name('sobre');

Route::get('/mision', function () {
    return view('footer.misionvision');
})->name('mision');

Route::get('/termino', function () {
    return view('footer.termycond');
})->name('termino');

