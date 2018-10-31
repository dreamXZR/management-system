<?php

namespace App\Models;

class LetterProof extends Model
{
    protected $fillable = ['name', 'community_name', 'present_address', 'residence_address', 'use', 'basis','number'];

    public function scopeDataSelect($query,$select)
    {
    	$select=array_filter($select);
    	if(count($select)){
    		return $query->where($select);
    	}else{
    		return $query;
    	}
    }
}
