<?php

namespace App\Models;

use App\Models\Traits\balanceUnfinish;
use EloquentFilter\Filterable;

class AboveTable extends Model
{
	use Filterable,balanceUnfinish;
    
    protected $fillable = ['information_id','name', 'sex', 'call_time', 'address', 'phone', 'call_content', 'back_content', 'other', 'images', 'main', 'secondary', 'join', 'number'];
}
