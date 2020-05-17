<?php

namespace App\Models\Traits;

use App\Models\AboveTable;
use App\Models\ProblemTable;
use App\Models\RegisterTable;
use Illuminate\Support\Facades\Cache;

trait balanceUnfinish
{
    /*
     * 获取未完成的总数量
     * */
    public function getTotal($type_name='')
    {
        if(!$type_name){
            return 0;
        }
        if(!Cache::has($type_name)){

            $unfinsish_num=$this->calculateTotal($type_name);
            Cache::forever($type_name,$unfinsish_num);

        }

        return Cache::get($type_name);
    }

    /*
     * 计算未完成的总数量
     * */
    public function calculateTotal($type_name='')
    {
        switch ($type_name){
            case 'register_unfinish_num':
                return RegisterTable::where('is_finish',0)->count();
                break;
            case 'above_unfinish_num':
                return AboveTable::where('is_finish',0)->count();
                break;
            case 'problem_unfinish_num':
                return ProblemTable::where('is_finish',0)->count();
                break;
            default:
                return 0;
                break;
        }

    }

    /*
     * 增加
     * */
    public function total_increment($type_name='')
    {
        Cache::increment($type_name,1);
    }

    /*
     * 减少
     * */
    public function total_decrement($type_name='')
    {
        Cache::decrement($type_name,1);
    }


}