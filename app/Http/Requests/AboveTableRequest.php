<?php

namespace App\Http\Requests;

class AboveTableRequest extends Request
{
    public function rules()
    {
        return [
            'name'=>'required|max:20',
            'sex'=>'required',
            'call_time'=>'required',
            'address'=>'required|max:100',
            'phone'=>'required|phone:CN',
        ];
    }

    public function messages()
    {
         return [
            'name'=>'姓名',
            'sex'=>'性别',
            'call_time'=>'来电时间',
            'address'=>'家庭住址',
            'phone'=>'电话'
        ];
    }
}
