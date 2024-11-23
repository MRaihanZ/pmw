<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TransactionController;
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
    return redirect('/home');
});

Route::get('/home', HomeController::class . '@index')->name('home');
Route::controller(IncomeController::class)->group(function () {
    Route::get('/income', 'index')->name('income.index');
    Route::post('/income', 'store')->name('income.index');
    Route::get('/income/{id}/edit', 'edit')->name('income.edit');
    Route::put('/income/{id}/edit', 'update')->name('income.update');
});

Route::controller(ExpenseController::class)->group(function () {
    Route::get('/expense', 'index')->name('expense.index');
    Route::post('/expense', 'store')->name('expense.index');
    Route::get('/expense/{id}/edit', 'edit')->name('income.edit');
    Route::put('/expense/{id}/edit', 'update')->name('income.update');
});

Route::controller(TransactionController::class)->group(function () {
    Route::get('/transaction', 'index')->name('transaction.index');
    Route::get('/transaction/{id}/delete', 'delete')->name('transaction.delete');
});
