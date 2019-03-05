<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PanelFunctionality extends Model
{
    protected $fillable = ['id', 'panel_id', 'functionality_id'];
    public $timestamps = false;
}
