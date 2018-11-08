<?php 

namespace App\Models\Filters;

use EloquentFilter\ModelFilter;

class LetterProofFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function residenceAddress($value)
    {
    	return $this->whereLike('residence_address',$value);
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
