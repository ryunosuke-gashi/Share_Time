<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Univ extends Model
{
    protected $fillable = ['univ_name'];
 
    public function users() 
    {
        return $this->hasMany('App\User');
    }

}
