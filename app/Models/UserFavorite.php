<?php

namespace HomeStore\Models;

use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    protected $table = 'user_favorite';
    protected $fillable = ['id', 'user_id','product_id','shop_id'];
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo(Users::class);
    }
    public function shop()
    {
        return $this->belongsTo(Shops::class);
    }
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
