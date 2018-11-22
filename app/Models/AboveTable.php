<?php

namespace App\Models;

use EloquentFilter\Filterable;

class AboveTable extends Model
{
	use Filterable;
    
    protected $fillable = ['information_id','name', 'sex', 'call_time', 'address', 'phone', 'call_content', 'back_content', 'other', 'images', 'main', 'secondary', 'join', 'number'];
}
