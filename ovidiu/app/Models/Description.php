<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $table = "description";

    // Disable automatic timestamps because the timestamps are not specified in the migration, so therefor the columns do not exist in database
    public $timestamps = false;

    protected $fillable = [
        'home_description',
        'about_description',
        'service_description',
        // this last column should contain:
        //            array(
        //                "1"=>"lorem ipsum",
        //                "2"=>"dolor sit amet",
        //                "3"=>"cosecteur adisciplin et"
        //            )
    ];
}


