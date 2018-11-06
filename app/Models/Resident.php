<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{

	protected $fillable=['name','relationship','sex','nation','birthday','culture','face','marriage','identity','hobby','id_number','unit'];
    
    public function information()
    {
    	return $this->belongsTo('App\Models\Information');
    }
}
