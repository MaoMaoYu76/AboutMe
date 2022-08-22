<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeController;

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

Route::get('/Mes',[MeController::class,'index'])->name('mes.index');
Route::get('/Mes/trouble',[MeController::class,'trouble'])->name('mes.trouble');
Route::get('/Mes/share',[MeController::class,'share'])->name('mes.share');
Route::get('/Mes/arrange',[MeController::class,'arrange'])->name('mes.arrange');
Route::get('/Mes/goal',[MeController::class,'goal'])->name('mes.goal');
Route::get('/Mes/gains',[MeController::class,'gains'])->name('mes.gains');
Route::get('/Mes/say',[MeController::class,'say'])->name('mes.say');


