<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $data['transactions'] = Transaction::get();
        $data['total_income'] = Transaction::where('type', 'income')->sum('amount');
        $data['total_expense'] = Transaction::where('type', 'expense')->sum('amount');
        return view('transaction.index', $data);
    }

    public function delete($id)
    {
        $transaction = Transaction::find($id)->delete();
        return redirect()->route('home');
    }
}
