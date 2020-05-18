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
    //public $relations = ['residents'=>['name','id_number','phone']];


    public function setup()
    {
    	return $this->where('p_id',NULL)->orderBy('present_address','desc')->orderBy('building')->orderBy('door')->orderBy('no');
    }

    public function presentAddress($value)
    {
        return $this->whereLike('present_address',$value);
    }

    public function building($value)
    {
        return $this->where('building',$value);
    }

    public function door($value)
    {
        return $this->where('door',$value);
    }

    public function no($value)
    {
        return $this->where('no',$value);
    }

    public function housePeople($value)
    {
        return $this->whereIn('house_people',$value);
    }

    public function houseStatus($value)
    {
        $sql = '(';
        foreach ($value as $v){
            $sql .= "house_status like '%".$v."%' and ";
        }
        $sql = substr($sql,0,strlen($sql)-4);
        $sql = $sql.")";
        return $this->whereRaw($sql);
    }

    public function people($value)
    {
        $sql = '(';
        foreach ($value as $v){
            $sql .= "people like '%".$v."%' or ";
        }
        $sql = substr($sql,0,strlen($sql)-3);
        $sql = $sql.")";
        return $this->whereRaw($sql);
    }

}
