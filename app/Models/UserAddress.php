<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_address';
    protected $fillable = ['id', 'title','user_id','city','location','lat','lan','address','is_default'];
    public function user()
    {
        return $this->belongsToMany(Users::class, 'id', 'user_id');
    }
}
