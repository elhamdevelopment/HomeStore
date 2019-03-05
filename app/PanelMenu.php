<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PanelMenu extends Model
{
    protected $fillable = ['id', 'panel_id', 'functionality_id', 'title', 'icon', 'page_name', 'order', 'status'];
}
