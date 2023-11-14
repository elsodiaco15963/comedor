<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ticket;
use App\Http\Controllers\Menu;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/ticket',[Ticket::class,'Index'])->name('ticket');

Route::get('/menu',[Menu::class,'Index'])->name('menu');
Route::get('/management',[Menu::class,'Index2'])->name('management');