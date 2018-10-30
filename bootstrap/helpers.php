<?php

//生成单号
/*
	@param $table_name 表名
*/
function create_number($table_name)
{
	$today=date('Ymd',time());
	$data=\DB::table($table_name)->where('number','like',$today.'%')->max('number');
	if($data){
		return $data+1;
	}else{
		return date('Ymd',time()).'001';
	}
}