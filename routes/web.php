<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\MenuController;

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

Route::get('/userhome', function () {
    return view('menu.userhome');
});

Route::get('{id}/submenu',[MenuController::class, 'subMenu']);


Route::get('/pilihmeja', function () {
    return view('pesan.pilihmeja');
});

Route::get('/pilihmenu',[MenuController::class, 'showMenu'])->name('pilihmenu');

Route::get('{id}/submenu/daftarmenu',[MenuController::class, 'daftarMenu']);

Route::get('/metodebayar', function () {
    return view('pesan.metodebayar');
});

Route::middleware(['auth', 'warung'])->group(function () {
    Route::get('/dashboard', function(){
        return view('seller.dashboard');
    });

    Route::get('/detailorder', function(){
        return view('seller.detailorder');
    });

    Route::get('/tambahmenu', function(){
        return view('seller.tambahmenu');
    });
    Route::post('/tambahmenu/simpan',[MenuController::class, 'addMenu'])->name('simpanmenu');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
