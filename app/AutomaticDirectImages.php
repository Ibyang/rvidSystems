<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomaticDirectImages extends Model
{
    //

    protected $table = "automatic_direct_images";

    protected $fillable = ['agent_ID', 'video_ID', 'image_file'];

}
