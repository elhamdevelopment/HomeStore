<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functionality extends Model
{
    protected $fillable = ['id', 'functionality_group_id', 'controller', 'action', 'title', 'description', 'status', 'display_in_menu'];
    public $timestamps = false;
}
