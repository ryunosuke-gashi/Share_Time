<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Article extends Model
{
  
    protected $fillable = [
     'food', 'meet_place','meet_place_image', 'time', 
];
public function user() 
{
    return $this->belongsTo('App\User');
}
public function comments() 
{
    return $this->hasMany('App\Comment');
}
public function favorites()
{
    return $this->hasMany('App\Favorite');
}
public function getUserTimeLine(Int $user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'DESC')->paginate(50);
    }

    public function getArticleCount(Int $user_id)
    {
        return $this->where('user_id', $user_id)->count();
    }
    public function getArticle(Int $article_id)
    {
        return $this->with('user')->where('id', $article_id)->first();
    }
    public function articleStore(Int $user_id, Array $data)
    {
        $this->user_id = $user_id;
        $this->text = $data['text'];
        $this->save();

        return;
    }
}


