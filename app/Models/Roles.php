<?php

namespace HomeStore\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id','title'];
    public $timestamps = false;
}
