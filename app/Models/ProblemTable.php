<?php

namespace App\Models;

use EloquentFilter\Filterable;

class ProblemTable extends Model
{
	use Filterable;
    
    protected $fillable = ['name', 'information_id', 'sex', 'call_time', 'address', 'phone', 'call_content', 'back_content', 'other', 'images', 'main', 'secondary', 'join', 'is_finish'];
}
