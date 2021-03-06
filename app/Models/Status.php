<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //指明该微博模型中一条微博属于一个用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
