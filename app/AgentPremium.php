<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentPremium extends Model
{
    //
    protected $table = "agent_premium_videos";

    protected $fillable = ['agent_ID', 'url_address', 'videoAddress', 'status', 'due_date', 'total_cost', 'apply_driveby', 'apply_lookfirst', 'progress_value', 'completion_date'];

}
