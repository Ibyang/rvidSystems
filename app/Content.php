<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //

    protected $table = "content_pages";

    protected $fillable = ['content_section', 'content_text'];

}
