<?php

namespace App\Http\Requests;

class LetterProofRequest extends Request
{
    public function rules()
    {
        return [
            'name'=>'required|max:100',
            'community_name'=>'required|max:100',
            'present_address'=>'required|max:100',
            'residence_address'=>'required|max:100',
            'use'=>'required|max:100',
            'basis'=>'required|max:100',
          	'self'=>'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'证明人',
            'community_name'=>'社区名称',
            'present_address'=>'现居住地址',
            'residence_address'=>'户籍地址',
            'use'=>'用处',
            'basis'=>'依据',
          	'self'=>'抬头'
        ];
    }


}
