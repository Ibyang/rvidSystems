<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountProfile extends Model
{
    //

    protected $table = "agents_profile";

    protected $fillable = ['agent_ID', 'group', 'name_agency', 'role_title', 'fullname', 'email', 'password', 'passwd', 'mobile_number', 'address', 'created_at', 'updated_at'];

}
