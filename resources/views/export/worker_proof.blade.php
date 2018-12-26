<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>就业证明</title>
    <style>
        html,body{
            width: 595px;
            height: 842px;
            margin: 0 auto;
            border: 1px solid #000;
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
        .top{
            width: 595px;
            height: 40%;
            border-bottom: 2px dashed #000;
        }
        h1{
            white-space: nowrap;
            text-align: center;
            padding-top: 10px;
            font-size: 20px;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
        }
        .box{
            margin: 0 70px;
        }
        .bh{
            white-space: nowrap;
            text-align: left;
            font-size: 12px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 30px 0 7px;
        }
        .text_1{
            white-space: nowrap;
            text-align: left;
            font-size: 12px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 3px 0;
        }
        .display{
            display: inline-block;
        }
        .lump{
            text-align: center;
            display: inline-block;
            width: 120px;
            font-size: 12px;
            font-weight: 400;
            padding: 0 0;
            margin: 0 5px;
            border: none;
            border-bottom: 1px solid #000;
        }
        .lump_1{
            display: inline-block;
            width: 300px;
            font-size: 12px;
            font-weight: 400;
            padding: 3px 5px;
            margin: 0 10px;
            border: none;
            border-bottom: 1px solid #000;
            text-align: left;
        }
        .lump200{
            display: inline-block;
            width: 220px;
            font-size: 12px;
            font-weight: 400;
            padding: 3px;
            margin: 0 10px;
            border: none;
            border-bottom: 1px solid #000;
            text-align: center;
        }
        .lumpw{
            display: inline-block;
            width: 170px;
            font-size: 12px;
            font-weight: 400;
            padding: 3px;
            margin: 0 10px;
            border: none;
            border-bottom: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="top">
    <h1>
        非天津市户籍境内来津人士灵活就业者随迁子女申请
    </h1>
    <h1>
        义务教育学位就业证明存根
    </h1>
    <div class="box">
        <p class="bh">编号：{{$worker['number']}}</p>
        <p class="text_1 display">我辖区居住的非本市户籍人员<input class="lump " type="text" value="{{$worker['name']}}"></p>
        <p class="text_1">其随迁子女<input class="lump" value="{{$worker['child_name']}}"></p>
        <p class="text_1 display">现居住地<input class="lumpw" value="{{$worker['present_address']}}"></p>
        <p class="text_1">联系电话<input class="lumpw" value="{{$worker['phone']}}" maxlength="11"></p>
        <p class="text_1 display">灵活就业内容<input class="lump_1" value="{{$worker['worker_content']}}"></p>
    </div>
</div>
<div class="bottom">
    <h1>
        非天津市户籍境内来津人士灵活就业者随迁子女申请
    </h1>
    <h1>
        义务教育学位就业证明
    </h1>
    <div class="box">
        <p class="bh">
            编号：{{$worker['number']}}
        </p>
        <p class="text_1 display">
            经核实，在我辖区居住的非本市户籍人员<input class="lump200" value="{{$worker['name']}}">
        </p>
        <p class="text_1 display">
            （身份证号<input class="lump200" type="text" value="{{$worker['id_number']}}" maxlength="18"><span>），为灵活就业人员，</span>
        </p>
        <p class="text_1 display">
            灵活就业内容<input class="lump_1" type="text" value="{{$worker['worker_content']}}">
        </p>
        <p class="text_1 display">
            工作地点<input class="lump_1" type="text" value="{{$worker['worker_place']}}">
        </p>
        <p class="text_1 display">
            联系电话<input class="lumpw" type="text" value="{{$worker['phone']}}" maxlength="11">
        </p>
        <p class="text_1">
            现居住地<input class="lumpw" type="text" value="{{$worker['present_address']}}">
        </p>
        <p class="text_1 display">
            其随迁子女<input class="lumpw" type="text" value="{{$worker['child_name']}}">
        </p>
        <p class="text_1 display">
            性别<input class="lump" type="text" value="@if($worker['child_sex']==1)男@else女@endif">
        </p>
        <p class="text_1 display">
            身份证号<input class="lump_1" type="text" maxlength="18" value="{{$worker['child_id_number']}}">
        </p>
        <p class="text_1 display">与居住证持有人希望申请河东区义务教育学位，特此证明，以备申请学位材料所用。</p>
    </div>
</div>
</body>
</html>