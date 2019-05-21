<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['id', 'title', 'category_id', 'shop_id', 'title', 'price', 'is_show', 'is_available', 'is_discount','discount', 'warranty', 'image_url', 'brand', 'description', 'total_rate'];
    public $timestamps = false;
}
