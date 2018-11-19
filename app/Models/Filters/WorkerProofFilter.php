<?php namespace App\Models\Filters;

use EloquentFilter\ModelFilter;

class WorkerProofFilter extends ModelFilter
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

    public function idNumber($value)
    {
    	return $this->where('id_number',$value);
    }

    public function number($value)
    {
    	return $this->whereLike('number',$value);
    }

    public function setup()
    {
        return $this->orderBy('created_at','desc');
    }
}
