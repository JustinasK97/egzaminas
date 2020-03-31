<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['account_nr', 'attribute', 'balance', 'user_id'];
}
