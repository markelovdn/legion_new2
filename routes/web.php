<?php

use App\Http\Controllers\Api\V1\AthletesController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\PassportsController;
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

Route::get('/{any}', function () {
    return view('index');
})->where('any', '.*');

//Route::match(['get', 'post'], '/athlete', [AthletesController::class, 'index']);
//Route::get( '/athlete/{id}', [AthletesController::class, 'findOne']);
//Route::post('/athlete/store', [AthletesController::class, 'store']);
//Route::post('/athlete/update/{id}', [AthletesController::class, 'update']);
//Route::post('/athlete/passport/update', [AthletesController::class, 'updatePassport']);
//Route::post('/athlete/group', [AthletesController::class, 'updatePassport']);
//Route::get('/athlete/editmaininfo/{id}', [AthletesController::class, 'formEditMainInfo']);
//Route::get('/athlete/editcoachinfo/{id}', [AthletesController::class, 'formEditCoachInfo']);
//Route::get('/athlete/editorgsinfo/{id}', [AthletesController::class, 'formEditOrgsInfo']);
//Route::post('/athlete/updatemaininfo', [AthletesController::class, 'updateMainInfo']);
//Route::post('/athlete/updatecoachinfo', [AthletesController::class, 'updateCoachInfo']);
//
//
//Route::match(['get', 'post'],'/parent', [ParentsController::class, 'newProfile']);
//Route::post('/parent/store', [ParentsController::class, 'store']);
//Route::get('/parent/{id}', [ParentsController::class, 'profile']);
//Route::match(['get', 'post'],'/parent/addChildren/{id}', [ParentsController::class, 'addChildren']);
//
//Route::match(['get', 'post'], '/passport', [PassportsController::class, 'index']);
//Route::match(['get', 'post'], '/passport/store', [PassportsController::class, 'store']);
//
//
//Route::get('/dashboard', function () {
//    $athlete = \App\Models\Athlete::find(1);
//    return view('dashboard', compact('athlete'));
//})->middleware(['auth'])->name('dashboard');
//
//require __DIR__.'/auth.php';
//
//
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
