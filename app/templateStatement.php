<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class templateStatement extends Model
{
    //
    protected $table = "template_statements";

    protected $fillable = ['no_images', 'statements'];
}
