<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        // 添加验证
        $this->validate(request(),[
            'body'  => 'required|min:2'
        ]);
        // 写入数据库
        $post->addComment(request('body'));
        // 回跳到当前url
        return back();
    }

}
