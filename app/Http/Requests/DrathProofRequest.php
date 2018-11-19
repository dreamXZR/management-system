<?php

namespace App\Http\Requests;

class DrathProofRequest extends Request
{
    public function rules()
    {
        
            return [
                'name'=>'required|max:20',
                'id_number'=>[
                    'required',
                    'regex:/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/'
                ],
                'residence_address'=>'required|max:100',
                'present_address'=>'required|max:100',
                'applicant'=>'required|max:20',
                'death_date'=>'required',
                'death_relation'=>'required',
                'death_address'=>'required|max:100',
                'applicant_id_number'=>[
                    'required',
                    'regex:/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/'
                ],
                'agent'=>'max:20',
                'application_relation'=>'max:20',
                'agent_id_number'=>[
                    'nullable',
                    'regex:/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/'],
                'other'=>'max:255'
            ];
        
    }

    public function messages()
    {
        return [
            'id_number.regex'=>'死者身份证号格式不正确',
            'applicant_id_number.regex'=>'申请人身份证号格式不正确',
            'agent_id_number.regex'=>'委托代理人身份证号格式不正确'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'死者姓名',
            'id_number'=>'身份证号',
            'residence_address'=>'户籍地址',
            'present_address'=>'现住地址',
            'applicant'=>'申请人',
            'death_date'=>'死亡时间',
            'death_address'=>'死亡地点',
            'death_relation'=>'与死者关系',
            'applicant_id_number'=>'申请人身份证号',
            'agent'=>'委托代理人',
            'application_relation'=>'与申请人关系',
            'agent_id_number'=>'委托代理人身份证号',
            'other'=>'其他'
        ];
    }
}
