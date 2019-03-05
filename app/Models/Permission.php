<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['id', 'permission_group_id', 'controller', 'action', 'title', 'description', 'status','icon','page_name','order', 'display_in_menu'];
    public $timestamps = false;
}
