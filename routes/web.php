<?php

use Illuminate\Support\Facades\Route;
use App\Models\Transaction;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/tambah-data', function () {
    $transaction = new Transaction;
    $transaction->amount = 243524;
    $transaction->category = 'gaji';
    $transaction->date = '2027-01-11';
    $transaction->type = 'expense';
    $transaction->description = 'testing 2 tambah data';
    $transaction->save();

    return "berhasil tambah : " . $transaction;
});

Route::get('/edit-data', function () {
    $transaction = Transaction::find(11);
    $transaction->amount = 4090;
    $transaction->category = 'lorem';
    $transaction->save();

    return "berhasil edit : " . $transaction;
});

Route::get('/hapus-data', function () {
    $transaction = Transaction::find(12)->delete();

    return "berhasil hapus" . $transaction . " data";
});

Route::get('/test', TestController::class . '@index');


Route::get('/call-transaction', function () {
    return Transaction::findOrFail(1);
});