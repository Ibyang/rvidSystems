<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class standardVideoPicture extends Model
{
    //
    protected $table = "standard_video_pictures";

    protected $fillable = ['agent_ID', 'video_ID', 'sort_order', 'duration', 'old_filename', 'new_filename', 'effect_style', 'statement'];
}
