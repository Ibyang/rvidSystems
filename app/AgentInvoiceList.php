<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentInvoiceList extends Model
{
    //
    protected $table = "invoice_details";

    protected $fillable = ['invoice_number', 'agent_ID', 'video_ID', 'description', 'total_amount',
        'paid_amount', 'balance', 'is_paid', 'payment_date', 'billing_date'];
}
