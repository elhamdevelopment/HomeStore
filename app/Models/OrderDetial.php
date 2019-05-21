<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetial extends Model
{
    protected $table = 'order_detail';
    protected $fillable = ['id', 'order_id','product_id','count','price'];

    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
}
