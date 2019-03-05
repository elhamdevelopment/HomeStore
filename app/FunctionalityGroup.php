<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunctionalityGroup extends Model
{
    protected $fillable = ['id','title'];
    public $timestamps = false;
}
