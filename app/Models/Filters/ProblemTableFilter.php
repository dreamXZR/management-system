<?php namespace App\Models\Filters;

use EloquentFilter\ModelFilter;

class ProblemTableFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function name($value)
    {
    	return $this->where('name',$value);
    }

    public function phone($value)
    {
    	return $this->where('phone',$value);
    }

    public function address($value)
    {
    	return $this->whereLike('address',$value);
    }

    public function number($value)
    {
    	return $this->whereLike('number',$value);
    }

    public function callTime($value)
    {
    	if($value[0] && $value[1]){
    		return $this->whereBetween('call_time',$value);
    	}else{
    		return $this;
    	}
    	
    }

    public function setup()
    {
    	return $this->orderBy('created_at','desc');
    }
}
