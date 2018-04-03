<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    //
    protected $table = "faq_questions";

    protected $fillable = ['question', 'answer', 'created_at', 'updated_at'];
}
