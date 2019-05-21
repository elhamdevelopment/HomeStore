<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    protected $fillable = ['id', 'title'];
    public $timestamps = false;
}
