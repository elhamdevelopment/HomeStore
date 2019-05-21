<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    protected $table = 'shops';
    protected $fillable = [
        'id',
        'city',
        'is_discount',
        'is_special',
        'discount',
        'shop_private_domain',
        'min_order',
        'location',
        'covered_area',
        'delivery_duration-max',
        'delivery_duration-min',
        'delivery_price',
        'delivery_type',
        'address',
        'post_code',
        'website',
        'email',
        'description',
        'total_rate',
        'phone',
        'mobile',
        'logo',
        'photos',
        'manager_name',
        'title',
        'shop_category_id',
        'user_id'];

    public function orders()
    {
        return $this->hasMany(Orders::class, 'shop_id','id');
    }
}
