<?php


use App\Models\Information;
use App\Models\RegisterTable;
use Illuminate\Support\Facades\Redis;

//生成单号

function create_number()
{
	$today=date('Ymd',time());
	$number=\Cache::get('number');
	if($number)
	{
		if($number[0]!=$today){
			$new_number=date('Ymd',time()).'001';
		}else{
			$new_number=$number[1]+1;
		}

	}else{
		$new_number=date('Ymd',time()).'001';
	}
	\Cache::forever('number',[$today,$new_number]);
	return $new_number;
	// $data=\DB::table($table_name)->where('number','like',$today.'%')->max('number');
	// if($data){
	// 	return $data+1;
	// }else{
	// 	return date('Ymd',time()).'001';
	// }
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
		$arr1=array_filter(json_decode($json1,true));
	}
	if($json2){
		$arr2=array_filter(json_decode($json2,true));
	}
	
	

	return json_encode(array_merge($arr1,$arr2));
}

//number-string
function num_str($str,$map_arr)
{
	$str_arr=[];
	$num_arr=explode(',', $str);
	
	foreach ($num_arr as $k => $v) {
		if($v){
			$str_arr[]=$map_arr[$v];
		}
		
	}

	return implode(',', $str_arr);
}

function str_num($str,$map_arr)
{
	$num_arr=[];
	$str_arr=explode(',', $str);
	foreach ($str_arr as $k => $v) {
		if($v){
			$num_arr[]=array_search($v, $map_arr);
		}
		
	}

	return implode(',', $num_arr);
}

//责任
function getLiabilityStr($ids)
{
	$data=[];
	$ids=explode(',', $ids);
	$datas=Information::whereIn('id',$ids)->get(['id','present_address','building','door','no']);
	foreach ($datas as $k => $v) {
		$data[]=$v->all_present_address;
	}
	return implode(',', $data);
}

//居民类别
function resident_type_format($value)
{
    $data=[];
    $value=explode(',', $value);



    foreach ($value as $v){
        if($v!=''){
            $data[]=RegisterTable::$resident_type_map[$v];
        }

    }

    return implode(',', $data);
}

//获得所有居民地址
function get_addresses()
{
    $data=Redis::get('address');
    if($data){
        return json_decode($data,true);
    }else{
        $addresses=Information::where('id','>',0)
            ->where('p_id',NULL)
            ->defaultOrder()
            ->get(['id','present_address','building','door','no'])->toArray();

        $data=[];
        foreach ($addresses as $k=>$v){
            $data[]=[
                'id'=>$v['id'],
                'address'=>$v['present_address'].'庭苑'.$v['building'].'-'.$v['door'].'-'.$v['no']
            ];
        }
        Redis::set('address',json_encode($data));
        return $data;
    }

}
