<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $fillable = ['id', 'user_id', 'role_id'];
    public $timestamps = false;
}

