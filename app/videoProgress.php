<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videoProgress extends Model
{
    //

    protected $table = "video_progress_status";

    protected $fillable = ['video_ID', 'videotype', 'production_ID', 'picture_progress', 'script_progress', 'template_progress', 'voice_and_music', 'edits', 'total_progress'];
}
