<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // 白名单
    protected $fillable = ['title','body','user_id']; //或者使用

    /**
     * 关联评论表
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * 关联users表
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 添加回复
     * @param $body回复内容
     */
    public function addComment($body)
    {
        $this->comments()->create([
            'body' => $body,
            'user_id' => auth()->id()
        ]);
    }



}
