<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentInvoice extends Model
{
    //

    protected $table = "agent_payment_invoice_details";

    protected $fillable = ['agent_ID', 'subscription_type', 'storage_plan', 'invoice_to', 'invoice_to_type', 'address', 'suburb', 'state', 'postcode', 'person_name', 'contact_num', 'email', 'created_at', 'updated_at'];

}
