<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "team"; // need to specify the table because it expects "teams" table existance due to model name "Team"
    protected $fillable = [
        'id',
        'name',
        'position',
        'photo',
    ];

}
