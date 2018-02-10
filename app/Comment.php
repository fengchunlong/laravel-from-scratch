<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // 白名单
    protected $fillable = ['post_id','body'];

    /**
     * 关联post表
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

//    /**
//     * 关联users表
//     */
//    public function users()
//    {
//        return $this->belongsTo(User::class);
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
