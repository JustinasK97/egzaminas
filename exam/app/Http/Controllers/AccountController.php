<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
namespace App\Http\Controllers\Auth;

class AccountController extends Controller
{
    public function dashboard()
    {
        $accounts = Account::all();

        return view ('exam.pages.dashboard', compact('accounts'));
    }
}
