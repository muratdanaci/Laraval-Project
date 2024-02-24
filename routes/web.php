<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/products', [ProductsController::class, 'index'])->name('index');
    Route::get('/products/create', [ProductsController::class, 'create'])->name('create');
    Route::post('/products/create', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductsController::class, 'edit'])->name('products.edit');
    Route::post('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::get('/products/delete/{id}', [ProductsController::class, 'delete'])->name('products.delete');

    Route::get('/users', [UserController::class, 'list'])->name('users.list');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');

});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/test', [TestController::class, 'test'])->name('test');
    Route::get('/detail', [TestController::class, 'detail'])->name('detail');
});

require __DIR__.'/auth.php';
