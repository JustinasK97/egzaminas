<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', []);
    }

    public function makeTransfer()
    {
        $transfers = Transfer::all();
        $accounts = Account::all();
        return view('admin.pages.maketransfer', compact('transfers', 'accounts'));
    }

    public function store_transfer(Request $request)
    {
        $validateData = $request->validate([
            'accnumber' => 'required',
            'description' => 'required',
            'sum' => 'required',
            'name' => 'required',
        ]);

        $transfer = Transfer::create([
            'accnumber' => request('accnumber'),
            'description' => request('description'),
            'sum' => request('sum'),
            'name' => request('name'),
        ]);

        return redirect('home');
    }

    public function Transfersummary()
    {
        $transfers = Transfer::all();
        return view('exam.pages.summary', compact('transfers'));
    }
}
