<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id','title','body', 'satisfied_status', 'user_id','section','section_id','shop_id','reply_id'];
    public $timestamps = true;
}
