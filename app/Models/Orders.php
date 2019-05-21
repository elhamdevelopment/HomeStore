<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'title',
        'order_date',
        'user_id',
        'shop_id',
        'payment_type',
        'price',
        'discount',
        'discount_code',
        'receiver_name',
        'description',
        'status'];

    public function shops()
    {
        return $this->belongsTo(Shops::class, 'shop_id', 'id');
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetial::class, 'order_id', 'id');
    }

}
