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

//删除图片
function del($file_path)
{
	$file_path=public_path() . '/' . $file_path;
	if(file_exists($file_path)){
		@unlink($file_path);
	}
}

//json合并
function json_merge($json1,$json2)
{
	$arr1=[];
	$arr2=[];
	
	if($json1){
		$arr1=json_decode($json1);
	}
	if($json2){
		$arr2=json_decode($json2);
	}
	
	

	return json_encode(array_merge($arr1,$arr2));
}

//number-string
function num_str($str,$map_arr)
{
	$str_arr=[];
	$num_arr=explode(',', $str);
	foreach ($num_arr as $k => $v) {
		$str_arr[]=$map_arr[$v];
	}

	return implode(',', $str_arr);
}

function str_num($str,$map_arr)
{
	$num_arr=[];
	$str_arr=explode(',', $str);
	foreach ($str_arr as $k => $v) {
		$num_arr[]=array_search($v, $map_arr);
	}

	return implode(',', $num_arr);
}