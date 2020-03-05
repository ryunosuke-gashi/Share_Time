<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    'user_id', 'food', 'meet_place','meet_place_image', 'time', 
];
}
