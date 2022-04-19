<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\WorkController;
use App\Http\Controllers\fontend\fontendController;
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
Auth::routes();
// fontend 




Route::get('/', [fontendController::class,'index']);
Route::get('/services', [fontendController::class, 'service']);
Route::get('/works', [fontendController::class, 'work']);
Route::get('/contact', [fontendController::class, 'contact']);
Route::get('/about-us', [fontendController::class, 'about']);
Route::post('/contact-store', [fontendController::class, 'storeContact']);



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard/add-service', [ServiceController::class, 'index'])->name('service');
Route::get('/dashboard/add-service/{id}', [ServiceController::class, 'index']);
Route::post('/dashboard/store-service', [ServiceController::class, 'store'])->name('add.service');
Route::get('/dashboard/destroy-service/{id}', [ServiceController::class, 'destroy']);





Route::get('/dashboard/add-work', [WorkController::class, 'index'])->name('work');
Route::get('/dashboard/add-work/{id}', [WorkController::class, 'index']); //edit content get
Route::post('/dashboard/store-work',[WorkController::class, 'store'])->name('store.work');
Route::get('/dashboard/destroy-work/{id}', [WorkController::class, 'destroy']);


