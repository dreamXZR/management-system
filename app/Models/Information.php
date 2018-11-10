<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{

	protected $fillable=['present_address','residence_address','phone','residence_status','type1','type2','type3','situation','other'];
    
    public function residents()
    {
    	return $this->hasMany('App\Models\Resident');
    }

    public function handicappeds()
    {
    	return $this->hasMany('App\Models\Handicapped');
    }

    // public function set
}
