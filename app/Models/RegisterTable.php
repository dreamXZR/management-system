<?php

namespace App\Models;

use EloquentFilter\Filterable;
use App\Models\Traits\balanceUnfinish;

class RegisterTable extends Model
{
	use Filterable,balanceUnfinish;
	
    protected $fillable = [
        'name',
        'sex',
        'call_time',
        'address',
        'phone',
        'call_content',
        'back_content',
        'other',
        'number',
        'images',
        'main',
        'secondary',
        'join',
        'information_id',
        'resident_type',
        'charge'
    ];

    public static $resident_type_map=[
        1=>'老年人',
        2=>'残疾人',
        3=>'矫正人员',
        4=>'低保特困人员',
        5=>'优抚人员',
        6=>'其它'
    ];

    public function information()
    {
    	return $this->belongsTo('App\Models\Information');
    }
    
    
}
