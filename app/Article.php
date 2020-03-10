<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    'user_id', 'food', 'meet_place','place_image', 'time', 
];
public function user() 
    {
        return $this->belongsTo('App\User');
    }
public function comments() 
    {
        return $this->hasMany('App\Comment');
    }
    
    public function getArticle($article_id){
        return $this->with('user')->where('id', $article_id)->first();
    }
}