<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    // define name of table used
    protected $table = "social_media_links";

    protected $fillable = ['ID','facebook', 'twitter', 'linkedin', 'youtube', 'pinterest', 'googleplus'];
}
