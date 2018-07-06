<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voiceFiles extends Model
{
    //

    protected $table = "voice_used_files";

    protected $fillable = ['agent_ID', 'video_ID', 'voice_over_name'];

}
