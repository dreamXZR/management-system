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