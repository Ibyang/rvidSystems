<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentInvoice extends Model
{
    //

    protected $table = "agent_invoice_details";

    protected $fillable = ['agent_ID', 'invoice_to', 'invoice_to_type', 'address', 'person_name', 'contact_num', 'email', 'created_at', 'updated_at'];

}
