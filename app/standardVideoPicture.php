<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class standardVideoPicture extends Model
{
    //
    protected $table = "standard_video_pictures";

    protected $fillable = ['agent_ID', 'video_ID', 'image', 'effect_style'];
}
