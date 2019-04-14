<?php

namespace HomeStore\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id', 'title'];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('HomeStore\Models\Users');
    }
}
