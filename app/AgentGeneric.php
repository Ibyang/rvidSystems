<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentGeneric extends Model
{
    //
    protected $table = "agent_generic_videos";

    protected $fillable = ['agent_ID', 'url_address', 'total_cost'];
}
