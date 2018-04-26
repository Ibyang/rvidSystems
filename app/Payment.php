<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = "payments";

    protected $fillable = ['item_number', 'item_name', 'amount', 'transaction_id', 'currency_code', 'payment_status'];
}
