<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model as baseModel;

class Information extends baseModel
{
    use Filterable;    

	private $residence_status_map=[
                1=>'农业',
                2=>'非农业'
            ];
    private $house_people_map=[
                1=>'业主',
                2=>'租户',
                3=>'空房'
            ];
    public $house_status_map=[
                1=>'户在',
                2=>'户不在',
                3=>'人在',
                4=>'人不在'
            ];
    public $people_map=[
                1=>'老人空巢',
                2=>'独居',
                3=>'残疾人',
                4=>'低保户',
                5=>'特困',
                6=>'复退',
                7=>'现役',
                8=>'侨属',
                
            ];

    
        
    protected $fillable=[
        'present_address',
        'building',
        'door',
        'no',
        'residence_status',
        'house_people',
        'house_status',
        'people',
        'situation',
        'other',
        'p_id',
        'replace_time'
    ];
    
    
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

    public function above_tables()
    {
        return $this->hasMany(AboveTable::class);
    }
    
    public function problem_tables()
    {
        return $this->hasMany(ProblemTable::class);
    }


    //数据库插入相关

    public function setResidenceStatusAttribute($value)
    {
        $number=array_search($value, $this->residence_status_map);
        $this->attributes['residence_status'] = $number;
    }

    public function getResidenceStatusAttribute($value)
    {
        if($value){
            $str=$this->residence_status_map[$value];
            return $str;
        }else{
            return '';
        }
        
    }

    public function setHousePeopleAttribute($value)
    {
        $number=array_search($value, $this->house_people_map);
        $this->attributes['house_people'] = $number;
    }

    public function getHousePeopleAttribute($value)
    {
        if($value){
            $str=$this->house_people_map[$value];
            return $str;
        }else{
            return '';
        }
        
    }

    public function setHouseStatusAttribute($value)
    {
        $number=str_num($value,$this->house_status_map);
        $this->attributes['house_status']=$number;
    }

    public function getHouseStatusAttribute($value)
    {
        if($value){
            $str=num_str($value,$this->house_status_map);
            return $str;
        }else{
            return $value;
        }
        
    }

    public function setPeopleAttribute($value)
    {
        $number=str_num($value,$this->people_map);
        $this->attributes['people']=$number;
    }

    public function getPeopleAttribute($value)
    {
        if($value){
            $str=num_str($value,$this->people_map);
            return $str;
        }else{
            return $value;
        }
        
    }

    //获取历史记录id
    public function historyIds($id)
    {
        $data=$this->where('p_id','<>',NULL)->get(['id','p_id']);
        return $this->_childrenids($data,$id);
    }

    public function _childrenids($data,$id)
    {
        static $arr=[];
        foreach ($data as $k => $v) {
            if($v['p_id']==$id){
                $arr[]=$v['id'];
                $this->_childrenids($data,$v['id']);
            }
        }

        return $arr;
    }

}
