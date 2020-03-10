<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'article_id', 'user_id', 'comment',
    ];
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getComments($article_id)
    {
        return $this->with('user')->where('article_id', $article_id)->get();
    }
}
