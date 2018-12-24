<?php namespace App\Models\Filters;

use EloquentFilter\ModelFilter;

class InformationFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = ['residents'=>['name','id_number','phone']];

    // public function name($value)
    // {
    //     return $this->whereHas('residents',function($query) use($value){
    //         return $query->where('name',$value);
    //     });
    // }

    public function setup()
    {
    	return $this->where('p_id',NULL)->orderBy('present_address');
    }

    public function presentAddress($value)
    {
        return $this->whereLike('present_address',$value);
    }

}
