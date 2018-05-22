<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentVideoOrders extends Model
{
    //
    protected $table = "agent_video_orders";

    protected $fillable = ['agent_ID', 'category', 'url_address', 'videoAddress', 'status', 'apply_driveby', 'apply_lookfirst', 'progress_value',
                           'account_manager', 'email', 'telephone', 'skype', 'completion_date', 'due_date'];
}
