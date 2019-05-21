<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $table = 'user_wallet';
    protected $fillable = ['id', 'user_id','description','amount','transaction_type'];
    public $timestamps = false;
}
