<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accont extends Model
{
    protected $table = 'accont';
    protected $fillable = ['username', 'password', 'name', 'role'];
}
