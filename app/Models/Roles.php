<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id', 'title'];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('EasyShop\Models\Users');
    }
}
