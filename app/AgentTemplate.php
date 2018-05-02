<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentTemplate extends Model
{
    //

    protected $table = "agent_template";

    protected $fillable = ['agent_ID', 'main_image', 'extra_image1', 'extra_image2', 'logo', 'main_frame_template', 'main_frame_template_format', 'main_frame_colours',
                            'main_frame_colours_sub', 'middle_frame_template', 'middle_frame_template_format', 'middle_frame_colours', 'middle_frame_colours_sub', 'end_frame_template', 'end_frame_template_format',
                            'end_frame_colours', 'end_frame_colours_sub', 'video_frame_name', 'video_frame_mobile', 'video_frame_web_emailadd', 'video_frame_agency_name', 'video_frame_content', 'randomise_statement_mf', 'video_middle_frame_statement',
                            'randomise_statement_ef', 'video_end_frame_statement', 'voice_format', 'voice_file_selection', 'music_style', 'music_file_format'];

}
