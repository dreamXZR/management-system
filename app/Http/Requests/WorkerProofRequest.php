<?php

namespace App\Http\Requests;

class WorkerProofRequest extends Request
{
    public function rules()
    {
        return [
            'name'=>'required|max:20',
            'id_number'=>[
                    'required',
                    'regex:/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/'
                ],
            'present_address'=>'required|max:100',
            'phone'=>'required|phone:CN',
            'worker_content'=>'required|max:255',
            'worker_place'=>'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }

    public function  attributes()
    {
        return [
            'name'=>'姓名',
            'id_number'=>'身份证号',
            'present_address'=>'现住地址',
            'phone'=>'联系电话',
            'worker_content'=>'就业内容',
            'worker_place'=>'就业地点',
            'child_name'=>'子女姓名',
            'child_sex'=>'子女性别',
            'child_id_number'=>'子女身份证'
        ];
    }
}
