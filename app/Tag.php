<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName() //父类Model中方法
    {
        return 'name';
    }
}
