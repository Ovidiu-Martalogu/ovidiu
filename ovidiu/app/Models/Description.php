<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $table = "description";
    protected $fillable = [
        'home_description',
        'about_description',
        'service_description'=>array("1"=>"lorem ipsum",
        "2"=>"dolor sit amet",
        "3"=>"cosecteur adisciplin et"),
    ];
}


