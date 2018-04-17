<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentStandard extends Model
{
    //
    protected $table = "agent_standard_videos";

    protected $fillable = ['agent_ID', 'status', 'due_date', 'total_cost', 'apply_driveby', 'apply_lookfirst'];

}
