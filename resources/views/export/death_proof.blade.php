<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>死亡证明</title>
    <style>
        html,body{
            width: 595px;
            height: 842px;
            margin: 0 auto;
        }
        *{
            margin:0;
            padding:0;
            
        }
        a{
            text-decoration:none;
        }
        ul li{
            list-style:none;
        }
        .clear{
            clear:both;
        }
        .left{
            float: left;
        }
        .right{
            float: right;
        }
        input{
            outline: none;
        }
        .title{
            white-space: nowrap;
            text-align: center;
            padding-top: 30px;
            font-size: 24px;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
        }
        .box{
            height: 100%;
            margin: 120px 30px 0 30px;
        }
        .text_1{
            white-space: nowrap;
            text-align: left;
            font-size: 12px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 8px 0;
        }
        .display{
            display: inline-block;
        }
        .lump{
            text-align: left;
            display: inline-block;
            width: 150px;
            font-size: 12px;
            font-weight: 400;
            padding: 4px 5px;
            margin: 0 15px;
            border: none;
            border-bottom: 1px solid #000;
        }
        .lump_1{
            width: 200px;
        }
        .lump_2{
            width: 300px;
        }
        .lump_3{
            margin: 0 28px;
        }
        .lump_4{
            width: 470px;
            margin: 0;
        }
        textarea{
            border: none;
            border-bottom: 1px solid #000000;
            outline: none;
            resize:none;
        }
    </style>
</head>
<body>
<p class="title">附件3 《居民死亡医学证明（推断）书》居委会证明</p>
<div class="box">
    <p class="text_1 display">
        死者姓名<input class="lump " type="text" value="{{$death['name']}}">
    </p>
    <p class="text_1 ">
        身份证号<input class="lump lump_1 " type="text" value="{{$death['id_number']}}">
    </p>
    <p class="text_1 display">
        户籍地址<input class="lump lump_2" type="text" value="{{$death['residence_address']}}">
    </p>
    <p class="text_1 display">
        现住地址<input class="lump lump_2" type="text" value="{{$death['present_address']}}">
    </p>
    <p class="text_1 display">
        死亡日期<input class="lump " type="text" value="{{$death['death_date']}}">
    </p>
    <p class="text_1 ">
        申请人<input class="lump lump_3" type="text" value="{{$death['applicant']}}">
    </p>
    <p class="text_1 display">
        与死者关系<input class="lump lump_1 " type="text" value="@switch($death['death_relation'])
        @case(1)
        配偶
        @break
        @case(2)
        子女
        @break
        @case(3)
        父母
        @break
        @endswitch
        ">
    </p>
    <p class="text_1 ">
        死亡地点<input class="lump lump_1 " type="text" value="{{$death['death_address']}}">
    </p>
    <p class="text_1 display">
        申请人身份证号<input class="lump lump_2" type="text" value="{{$death['applicant_id_number']}}">
    </p>
    <p class="text_1 display">
        委托代理人<input class="lump " type="text" value="{{$death['agent']}}">
    </p>
    <p class="text_1 ">
        与申请人关系（请注明）<input class="lump " type="text" value="{{$death['application_relation']}}">
    </p>
    <p class="text_1 display">
        委托代理人身份证号<input class="lump lump_2" type="text" value="{{$death['agent_id_number']}}">
    </p>
    <p class="text_1 left">其他需要说明的情况

    </p>
    <textarea class="left" style="margin-left: 15px; margin-top: 8px;" name="" id="" cols="60" >
        {{$death['other']}}
    </textarea>

</div>

</body>
</html>