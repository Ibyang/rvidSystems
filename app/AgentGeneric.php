<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentGeneric extends Model
{
    //
    protected $table = "agent_generic_videos";

    protected $fillable = ['agent_ID', 'url_address', 'status', 'due_date', 'total_cost', 'apply_driveby', 'apply_lookfirst', 'progress_value'];
}
