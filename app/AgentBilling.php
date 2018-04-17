<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentBilling extends Model
{
    //
    protected $table = "agent_billing_history";

    protected $fillable = ['agent_ID', 'video_id', 'video_type', 'video_cost', 'surge_cost', 'preferences_cost', 'extra_cost', 'total_cost', 'subscription_cost',
                           'status', 'to_bill', 'billing_date', 'due_date'];
}
