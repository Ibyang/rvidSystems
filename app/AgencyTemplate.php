<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyTemplate extends Model
{
    //

    protected $table = "agency_templates";

    protected $fillable = ['agency_name', 'folder_name', 'agency_main_pic', 'agency_logo', 'thumb_main_template_1', 'thumb_main_template_2', 'thumb_main_template_3', 'thumb_main_template_4',
                           'thumb_end_template_1', 'thumb_end_template_2', 'thumb_end_template_3', 'thumb_end_template_4', 'zoom_main_template_1',
                           'zoom_main_template_2', 'zoom_main_template_3', 'zoom_main_template_4', 'zoom_end_template_1', 'zoom_end_template_2',
                           'zoom_end_template_3', 'zoom_end_template_4]'];


}
