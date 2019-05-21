<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    protected $table = 'shop_category';
    protected $fillable = ['id', 'title'];
    public $timestamps = false;
}
