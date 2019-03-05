<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acl extends Model
{
    protected $fillable = ['id', 'user_id', 'functionality_id'];
    public $timestamps = false;
}

