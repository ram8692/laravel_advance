<?php

use App\Http\Controllers\CustomNotificationController;
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

Route::get('send',[CustomNotificationController::class,'index']);

Route::get('notify',[CustomNotificationController::class,'notify']);
Route::get('markasread/{id}',[CustomNotificationController::class,'markasread'])->name("markasread");

Route::get('sms',[CustomNotificationController::class,'sms']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
