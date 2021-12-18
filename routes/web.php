<?php

use App\Models\Athlete;
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

Route::get('/dashboard', function () {
    $athlete = \App\Models\Athlete::find(3);
    return view('dashboard', compact('athlete'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


