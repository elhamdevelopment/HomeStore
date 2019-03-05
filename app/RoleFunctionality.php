<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleFunctionality extends Model
{
    protected $fillable = ['id', 'role_id', 'functionality_id'];
    public $timestamps = false;
}
