<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentPremium extends Model
{
    //
    protected $table = "agent_premium_videos";

    protected $fillable = ['agent_ID', 'url_address', 'total_cost'];

}
