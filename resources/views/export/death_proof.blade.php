<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>死亡证明</title>
    <style>
        html,body{
            width: 794px;
            height: 1123px;
            margin: 0 auto;
        }
        *{
            margin:0;
            padding:0;
           /* font-family: "微软雅黑";*/
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
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 20px 0;
        }
        .display{
            display: inline-block;
        }
        .lump{
            text-align: left;
            display: inline-block;
            width: 200px;
            font-size: 16px;
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
            width: 550px;
        }
        .lump_3{
            margin: 0 28px;
        }
        textarea{
            border: none;
            border-bottom: 1px solid #000000;
            outline: none;
            resize:none;
        }
        .lump50{
            width: 50px;
        }
        span{
            font-size: 16px;
        }
    </style>
</head>
<body>
<p class="title">附件3 《居民死亡医学证明（推断）书》居委会证明</p>
<div class="box">
    <p class="text_1 display">
        死者姓名<input class="lump " type="text" value="{{$death['name']}}">
    </p>
    <p class="text_1 display" style="margin-left:20px">
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
    <p class="text_1 display" style="margin-left:20px">
        死亡地点<input class="lump lump_1 " type="text" value="{{$death['death_address']}}">
    </p>
    <p class="text_1 display">
        申请人<input class="lump lump_3" type="text" value="{{$death['applicant']}}">
    </p>
    <p class="text_1 display" style="margin-left:6px;">
        与死者关系<input class="lump lump_1" type="text" value="
        @switch($death['death_relation'])
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
    <p class="text_1 display">
        申请人身份证号<input class="lump lump_2" style="width: 140px;" type="text" value="{{$death['applicant_id_number']}}">
    </p>
    <p class="text_1 display">
        委托代理人<input class="lump " type="text" value="{{$death['agent']}}">
    </p>
    <p class="text_1 display" style="margin-left:7px">
        与申请人关系（请注明）<input class="lump " type="text" value="{{$death['application_relation']}}">
    </p>
    <p class="text_1 display">
        委托代理人身份证号<input class="lump lump_2" type="text" style="width: 140px;" value="{{$death['agent_id_number']}}">
    </p>
    <p class="text_1 display left">
        其他需要说明的情况
        <input class="lump lump_2" type="text" value="{{$death['other']}}">
    </p>
    <!--<textarea class="left" style="margin-left: 15px; margin-top: 8px;" name="" id="" cols="60" ></textarea>-->
    
    <div class="right" style="margin-top: 30px; ">
      	<p class="text_1 display" style="margin-top: 35px; loat: left; margin-left: -405px;">特此证明</p>
        <div style="text-align: center;">
            <p class="text_1 display">居委会盖章</p>
        </div>
        <p class="text_1 display" style="margin-top:10px;"><input class="lump lump50" type="text"><span>年</span><input class="lump lump50" type="text"><span>月</span><input class="lump lump50" type="text" value=""><span>日</span>&nbsp;&nbsp;</p>
    </div>
    <div class="clear"></div>
    <p class="text_1 display" style="margin-left:-15px;margin-top:50px ">提示：</p>
    <p style="margin-top:15px"><span>1.申请签发《死亡证》的申请人应为对死者情况知情的第一顺位继承人或委托人</span></p>
    <p><span>2.申请签发《死亡证》携带材料：死者户口簿（外地户籍不能提供户口薄的必须提供身份证明）、身份证及复印件，办理者的身份证及复印件，死者居住地居委会证明。</span></p>
    <p><span>3.签发单位：为死者户籍地所属的社区卫生服务中心（或卫生院）。</span></p>
</div>
</body>
</html>