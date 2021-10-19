<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EquipmentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;

use App\Models\Categories;

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
    return view('layouts.dashboard');
});


Route::get('/equipments', [EquipmentsController::class, 'index'])->name('equipments.index');
Route::post('/equipments', [EquipmentsController::class, 'store'])->name('equipments.store');

Route::put('/equipments/{id}', [EquipmentsController::class, 'update'])->name('equipments.update');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');

Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
