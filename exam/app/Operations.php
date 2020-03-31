<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    protected $fillable = ['sender_id', 'account_nr', 'receiver_name', 'receiver_surname', 'amount', 'description'];
}
