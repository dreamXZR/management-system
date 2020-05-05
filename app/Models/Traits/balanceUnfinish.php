<?php

namespace App\Models\Traits;

use App\Models\RegisterTable;
use Illuminate\Support\Facades\Cache;

trait balanceUnfinish
{
    /*
     * 获取未完成的总数量
     * */
    public function getTotal()
    {

        if(!Cache::has('unfinsish_num')){

            $unfinsish_num=$this->calculateTotal();
            Cache::forever('unfinsish_num',$unfinsish_num);

        }

        return Cache::get('unfinsish_num');
    }

    /*
     * 计算未完成的总数量
     * */
    public function calculateTotal()
    {
        return RegisterTable::where('is_finish',0)->count();
    }

    /*
     * 增加
     * */
    public function total_increment()
    {
        Cache::increment('unfinsish_num',1);
    }

    /*
     * 减少
     * */
    public function total_decrement()
    {
        Cache::decrement('unfinsish_num',1);
    }


}