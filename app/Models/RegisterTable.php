<?php

namespace App\Models;

use EloquentFilter\Filterable;

class RegisterTable extends Model
{
	use Filterable;
	
    protected $fillable = ['name', 'sex', 'call_time', 'address', 'phone', 'call_content', 'back_content', 'other', 'number','images','main','secondary','join','information_id'];

    public function information()
    {
    	return $this->belongsTo('App\Models\Information');
    }
    
    
}
