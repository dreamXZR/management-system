<?php namespace App\Models\Filters;

use EloquentFilter\ModelFilter;

class ResidentFilter extends ModelFilter
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

    public function presentAddress($value)
    {
    	return $this->whereLike('present_address',$value);
    }

    public function idNumber($value)
    {
    	return $this->where('id_number',$value);
    }
}
