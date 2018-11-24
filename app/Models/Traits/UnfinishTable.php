<?php

namespace App\Models\Traits;

use App\Models\RegisterTable;
use Cache;

trait UnfinishTable
{
	//缓存相关配置
	protected $cache_key='unfinish_table';
	protected $cache_expire_in_minutes=60;

	//时间设定
	protected $day=10;

	public function getUnfinishTables()
	{
		return Cache::remember($this->cache_key,$this->cache_expire_in_minutes,function(){
            return $this->calculateRegister();
        });
	}

	public function getTotal()
	{
		//dd(Cache::get('total'));
		//Cache::forget('total');

		return Cache::remember('total',$this->cache_expire_in_minutes,function(){
            return $this->calculateTotal();
        });
	}

	public function calculateRegister()
	{
		$start_time=date('Y-m-d H:i:s',strtotime('- '.$this->day.' day'));
		$end_time=date('Y-m-d H:i:s',strtotime('+ '.$this->day.' day'));
		$registers=RegisterTable::where('is_finish',0)->whereBetween('created_at',[$start_time,$end_time])->pluck('id')->toArray();
		//Cache::put($this->cache_key,$registers,$this->cache_expire_in_minutes);
		
		return $registers;
	}

	public function calculateTotal()
	{
		$start_time=date('Y-m-d H:i:s',strtotime('- '.$this->day.' day'));
		$end_time=date('Y-m-d H:i:s',strtotime('+ '.$this->day.' day'));
		$registers=RegisterTable::where('is_finish',0)->whereBetween('created_at',[$start_time,$end_time])->pluck('id')->toArray();
		//Cache::put('total',$total,$this->cache_expire_in_minutes);
		return count($registers);
		
	}




}