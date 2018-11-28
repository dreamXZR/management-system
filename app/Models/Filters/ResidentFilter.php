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

    // public function phone($value)
    // {
    // 	return $this->where('phone',$value);
    // }

    public function presentAddress($value)
    {
    	return $this->whereLike('present_address',$value);
    }

    public function idNumber($value)
    {
    	return $this->where('id_number',$value);
    }

    public function nation($value)
    {
        return $this->whereIn('nation',$value);
    }

    public function culture($value)
    {
        return $this->whereIn('culture',$value);
    }

    public function face($value)
    {
        return $this->whereIn('face',$value);
    }

    public function marriage($value)
    {
        return $this->whereIn('marriage',$value);
    }

    public function identity($value)
    {
        return $this->whereIn('identity',$value);
    }

    public function birthday($value)
    {
        if($value[0] && $value[1]){
            return $this->whereBetween('birthday',$value);
        }else{
            return $this;
        }
    }

    public function setup()
    {
        return $this->orderBy('information_id','asc');
    }
}
