<?php

use App\Http\Controllers\MiniGagesController;
use App\Http\Controllers\TopController;
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
Route::get ('/top', [TopController::class, 'index'])->name ('top');
Route::get ('/minigames', [MiniGagesController::class, 'index'])->name ('minigames');
//Route::get ('/map', [\App\Http\Controllers\MapController::class, 'index'])->name ('map');
Route::get ('/faq', function (){
    return view('faq');
})->name ('faq');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
