<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentPreferences extends Model
{
    //
    protected $table = "agent_preferences";

    protected $fillable = ['agent_ID', 'surge_offer_option', 'broadcast_agent'];
}
