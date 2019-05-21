<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id', 'title'];
    public $timestamps = false;
}
