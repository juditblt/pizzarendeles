<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PublicController::class, 'index'])
->name('public.index');

Route::get('/home', [PrivateController::class, 'home'])
    ->name('private.home')->middleware('auth');
Route::get('/show', [PrivateController::class, 'show'])
    ->name('private.show')->middleware('auth');
Route::post('/store', [PrivateController::class, 'store'])
    ->name('private.store')->middleware('auth');
Route::post('/delete/{id}', [PrivateController::class, 'delete'])
    ->name('private.delete')->middleware('auth');

Route::get('/admin', function (){
    return view('admin.index');
})->name('admin')->middleware('auth');

Route::get('/admin/orders', [OrderController::class, 'index'])
    ->name('admin.orders')->middleware('auth');
Route::post('/admin/orders/done/{id}', [OrderController::class, 'done'])
    ->name('admin.orders.done')->middleware('auth');

Route::get('/admin/users', [UserController::class, 'index'])
    ->name('admin.users')->middleware('auth');
Route::post('/admin/users/delete/{id}', [UserController::class, 'delete'])
    ->name('admin.users.delete')->middleware('auth');

Route::get('/admin/pizzas', [PizzaController::class, 'index'])
    ->name('admin.pizzas')->middleware('auth');
Route::get('/admin/pizzas/create', [PizzaController::class, 'create'])
    ->name('admin.pizzas.create')->middleware('auth');
Route::post('/admin/pizzas/create', [PizzaController::class, 'store'])
    ->name('admin.pizzas.store')->middleware('auth');

require __DIR__.'/auth.php';
