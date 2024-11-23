<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class HomeController extends Controller
{
    public function index()
    {
        $data['transactions'] = Transaction::latest()->take(5)->get();
        $data['total_income'] = Transaction::where('type', 'income')->sum('amount');
        $data['total_expense'] = Transaction::where('type', 'expense')->sum('amount');
        return view('home', $data);
    }
}
