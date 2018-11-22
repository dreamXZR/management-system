<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as baseModel;

class Information extends baseModel
{
    

	private $residence_status_map=[
                1=>'农业',
                2=>'非农业'
            ];
    private $house_people_map=[
                1=>'业主',
                2=>'租户',
                3=>'空房'
            ];
    private $house_status_map=[
                1=>'户在',
                2=>'户不在',
                3=>'人在',
                4=>'人不在'
            ];
    private $people_map=[
                1=>'老人空巢',
                2=>'独居',
                3=>'复退军人',
                4=>'残疾人',
                5=>'侨属',
                6=>'低保户口',
                7=>'特困'
            ];

    
        
    protected $fillable=['residence_address','residence_status','house_people','house_status','people','situation','other'];
    
    
    public function residents()
    {
    	return $this->hasMany('App\Models\Resident');
    }

    public function handicappeds()
    {
    	return $this->hasMany('App\Models\Handicapped');
    }

    public function register_tables()
    {
        return $this->hasMany('App\Models\RegisterTable');
    }

    



    //数据库插入相关

    public function setResidenceStatusAttribute($value)
    {
        $number=array_search($value, $this->residence_status_map);
        $this->attributes['residence_status'] = $number;
    }

    public function getResidenceStatusAttribute($value)
    {
        $str=$this->residence_status_map[$value];
        return $str;
    }

    public function setHousePeopleAttribute($value)
    {
        $number=array_search($value, $this->house_people_map);
        $this->attributes['house_people'] = $number;
    }

    public function getHousePeopleAttribute($value)
    {
        $str=$this->house_people_map[$value];
        return $str;
    }

    public function setHouseStatusAttribute($value)
    {
        $number=str_num($value,$this->house_status_map);
        $this->attributes['house_status']=$number;
    }

    public function getHouseStatusAttribute($value)
    {
        $str=num_str($value,$this->house_status_map);
        return $str;
    }

    public function setPeopleAttribute($value)
    {
        $number=str_num($value,$this->people_map);
        $this->attributes['people']=$number;
    }

    public function getPeopleAttribute($value)
    {
        $str=num_str($value,$this->people_map);
        return $str;
    }

}
