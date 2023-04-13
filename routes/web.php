<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Registrationcontroller;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

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

Route::get('/', [Registrationcontroller::class, 'index']);
Route::post('/register', [Registrationcontroller::class, 'register']);
Route::get('/customer/view', [Registrationcontroller::class, 'view']);
Route::get('/customer/create', [Registrationcontroller::class, 'create'])->name('custome_create');
Route::get('/customer/delete/{id}', [Registrationcontroller::class, 'destroy'])->name('custome_delete');
Route::get('/customer/edit/{id}', [Registrationcontroller::class, 'edit'])->name('custome_edit');
Route::post('/customer/update/{id}', [Registrationcontroller::class, 'update'])->name('custome_update');
