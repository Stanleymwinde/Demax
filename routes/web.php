<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('index.blade');
// });

// User controllers start
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/properties', [UserController::class, 'properties'])->name('properties');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/propertysingle/{id}', [UserController::class, 'show'])->name('propertysingle');
Route::get('/productsingle/{id}', [UserController::class, 'get'])->name('productsingle');


//send mail
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

//show single product
// Route::get('/singleproperty', [UserController::class, 'get'])->name('propertysingle1');
