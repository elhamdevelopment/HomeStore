<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    protected $fillable = ['id','title'];
    public $timestamps = false;
}
