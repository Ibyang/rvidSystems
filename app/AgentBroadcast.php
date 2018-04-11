<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentBroadcast extends Model
{
    //
    protected $table = "agent_broadcast_areas";

    protected $fillable = ['agent_ID', 'suburb'];
}
