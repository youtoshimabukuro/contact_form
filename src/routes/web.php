<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;

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

/*Route::middleware('auth')->group(function () {
     Route::get('/', [ContactController::class, 'contact']);
 });*/
Route::get('/', [ContactController::class, 'contact']);
Route::get('/register', [ContactController::class, 'register']);
Route::get('/login', [ContactController::class, 'login']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/admin',[ContactController::class,'admin']);

