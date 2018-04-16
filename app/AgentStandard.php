<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentStandard extends Model
{
    //
    protected $table = "agent_standard_videos";

    protected $fillable = ['agent_ID', 'total_cost'];

}
