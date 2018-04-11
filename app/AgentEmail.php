<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentEmail extends Model
{
    //
    protected $table = "agent_email_distribution";

    protected $fillable = ['agent_ID', 'email'];
}
