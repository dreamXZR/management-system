<?php

namespace App\Models;

use EloquentFilter\Filterable;
use App\Models\Traits\UnfinishTable;

class RegisterTable extends Model
{
	use Filterable,UnfinishTable;
	
    protected $fillable = ['name', 'sex', 'call_time', 'address', 'phone', 'call_content', 'back_content', 'other', 'number','images','main','secondary','join','information_id'];

    public function information()
    {
    	return $this->belongsTo('App\Models\Information');
    }
    
    
}
