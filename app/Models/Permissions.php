<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = ['id', 'permission_group_id', 'controller', 'action', 'title', 'description', 'status','icon','page_name','order', 'display_in_menu'];
    public $timestamps = false;
}
