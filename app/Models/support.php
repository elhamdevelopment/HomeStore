<?php

namespace EasyShop\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $table = 'support';
    protected $fillable = ['id', 'user_id','subject','description','email','full_name'];
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
