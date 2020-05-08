<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as baseModel;
use EloquentFilter\Filterable;

class Resident extends baseModel
{
    use Filterable;

	protected $fillable=['name','relationship','sex','nation','birthday','culture','face','marriage','identity','hobby','id_number','unit','residence_address','phone','tag','other'];
    
    public function information()
    {
    	return $this->belongsTo('App\Models\Information');
    }

    public $culture_map=[
    	1=>'小学以下',
    	2=>'小学',
    	3=>'初中',
    	4=>'高中',
    	5=>'大专',
    	6=>'大学',
    	7=>'大学以上'
    ];

    public $face_map=[
    	1=>'中共党员',
    	2=>'群众',
    	3=>'共青团',
    	4=>'农工党',
    	5=>'其他'
    ];

    public $marriage_map=[
    	1=>'已婚',
    	2=>'未婚',
    	3=>'离异',
    	4=>'丧偶'
    ];

    public $identity_map=[
    	1=>'在职',
    	2=>'退休',
    	3=>'学生',
    	4=>'学龄前',
        5=>'无业',
        6=>'失业'
    ];

    public $relationship_map=[
        1=>'租户',
        2=>'本人',
        3=>'空房',
        4=>'之父',
        5=>'之母',
        6=>'之妻',
        7=>'之夫',
        8=>'之长子',
        9=>'之次子',
        10=>'之长女',
        11=>'之次女',
        12=>'之岳父',
        13=>'之岳母',
        14=>'之公公',
        15=>'之婆婆',
      	16=>'之儿媳',
      	17=>'之孙子',
      	18=>'之孙女',
      	19=>'之外孙子',
      	20=>'之外孙女',
      	21=>'之女婿',
        50=>'其它'
    ];


    public function setCultureAttribute($value)
    {
    	$number=array_search($value,$this->culture_map);
    	$this->attributes['culture']=$number;
    }

    public function getCultureAttribute($value)
    {
        if($value){
            $str=$this->culture_map[$value];
            return $str;
        }else{
            return '';
        }

    }

    public function setFaceAttribute($value)
    {
    	$number=array_search($value,$this->face_map);
    	$this->attributes['face']=$number;
    }

    public function getFaceAttribute($value)
    {
        if($value){
            $str=$this->face_map[$value];
            return $str;
        }else{
            return '';
        }

    }

    public function setMarriageAttribute($value)
    {
    	$number=array_search($value,$this->marriage_map);
    	$this->attributes['marriage']=$number;
    }

    public function getMarriageAttribute($value)
    {
        if($value){
            $str=$this->marriage_map[$value];
            return $str;
        }else{
            return '';
        }

    }

    public function setIdentityAttribute($value)
    {
    	$number=array_search($value,$this->identity_map);
    	$this->attributes['identity']=$number;
    }

    public function getIdentityAttribute($value)
    {
        if($value){
            $str=$this->identity_map[$value];
            return $str;
        }else{
            return '';
        }

    }

    // public function setRelationshipAttribute($value)
    // {
    //     $number=array_search($value,$this->relationship_map);
    //     $this->attributes['relationship']=$number;
    // }

    // public function getRelationshipAttribute($value)
    // {
    //     $str=$this->relationship_map[$value];
    //     return $str;
    // }

    public function getSexAttribute($value)
    {
    	if($value==0)
    	{
    		return '女';
    	}else{
    		return '男';
    	}
    }

    public function setSexAttribute($value)
    {
        if($value=='男'){

            $this->attributes['sex']=1;
        }else if($value=='女'){
            $this->attributes['sex']=0;
        }else{
            $this->attributes['sex']=$value;
        }
    }

    public function getAgeAttribute()
    {
        if($this->attributes['birthday']){
            return $this->getAgeByBirthday($this->attributes['birthday']);
        }else{
            return '';
        }

    }

    private function getAgeByBirthday($birthday){
        $age = strtotime($birthday);
        if($age === false){
            return false;
        }
        list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age));
        $now = strtotime("now");
        list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now));
        $age = $y2 - $y1;
        if((int)($m2.$d2) < (int)($m1.$d1))
            $age -= 1;
        return $age;
    }

    public function setResidenceAddressAttribute($value)
    {
        if(is_null($value)){
            return '';
        }else{
            return $value;
        }
    }
}
