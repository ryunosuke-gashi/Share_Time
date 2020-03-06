<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Comment extends Model
{
    

    protected $fillable = [
        'text',
    ];
    public function article() 
{
    return $this->belongsTo('App\Article');
}
public function user() 
{
    return $this->belongsTo('App\user');
}
public function getComments(Int $article_id)
{
    return $this->with('user')->where('article_id', $article_id)->get();
}
}