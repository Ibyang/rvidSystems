<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = "list_agents";

    protected $fillable = ['group', 'name_agency', 'role_title', 'firstname', 'lastname', 'email', 'password', 'agent_password', 'mobile', 'address', 'address2', 'suburb', 'postcode', 'state', 'created_at', 'updated_at'];
//    protected $fillable = ['firstname', 'lastname', 'email', 'passwd', 'mobile', ];

}
