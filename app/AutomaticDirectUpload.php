<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomaticDirectUpload extends Model
{
    //

	protected $table = "automatic_direct_upload";

    protected $fillable = ['agent_ID', 'video_ID', 'address1', 'address2', 'address3', 'suburb', 'state', 'postcode', 'num_bedroom', 'num_bathrooms',
						   'num_cars', 'property_type', 'property_description_file'];

}
