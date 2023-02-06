<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['idpost', 'title', 'content', 'date', 'username'];

    public function accont(){
        return $this->hasMany(\App\Accont::class, 'username');
    }
}
