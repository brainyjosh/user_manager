<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\transactionController;

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

Auth::routes();
Route::get('/secured_admin', function () {
    return view('superadmin');
});

// Route::get('/home', function () {
//     return view('profile');
// });


Route::resources([  
    '/transactions' => transactionController::class,
    '/user' => usersController::class,
]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/newuser', [App\Http\Controllers\usersController::class, 'store'])->name('store');
// Route::post('/transactions', [App\Http\Controllers\usersController::class, 'store'])->name('store');
// Route::get('/secured_admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
