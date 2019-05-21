<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    protected $table = 'rates';
    protected $fillable = ['id', 'user_id','section','section_id','rate'];
    public $timestamps = true;
}
