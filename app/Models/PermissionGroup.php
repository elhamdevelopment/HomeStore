<?php

namespace HomeStore\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    protected $fillable = ['id','title'];
    public $timestamps = false;
}
