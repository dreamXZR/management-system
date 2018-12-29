<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>来访登记</title>
    <style>
        html,body{
            width: 794px;
            height: 1123px;
            margin: 0 auto;
            margin-top: 30px;
        }
        *{
            margin:0;
            padding:0;
           /* font-family: "微软雅黑";*/
            /*font-style: 12px;*/
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
        table {
            width: 730px;
            height: 1123px;
            box-sizing: border-box;
           /* font-family: 微软雅黑;*/
            /*cellspacing: 0;*/
            /*cellpadding: 0;*/
            border-collapse:collapse;
            margin: 0 35px;
        }
        .one{
            width: 87.5px;
            border: 1px solid #000;
            height: 40px;
            /*line-height: 40px;*/
            text-align: center;
            font-size: 16px;
        }
        .two{
            width: 262.5px;
            border: 1px solid #000;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 16px;
        }
        .one_1{
            width: 87.5px;
            border: 1px solid #000;
            height: 285.6px;
            line-height: 285.6px;
            text-align: center;
            font-size: 16px;
        }
        .one_2{
            width: 87.5px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 16px;
        }
        .one_3{
            height: 40px;
            line-height: 40px;
            text-align: left;
            padding-left: 5px;
            font-size: 16px;
        }
        .one_4{
            height: 40px;
            line-height: 40px;
            text-align: left;
            padding-left: 40px;
            font-size: 16px;
        }
        .one_5{
            height: 40px;
            line-height: 40px;
            text-align: left;
            padding-left: 70px;
            font-size: 16px;
        }
        .two_2{
            /*width: 495px;*/
            border: 1px solid #000;
            height: 285.6px;
            /*line-height: 285.6px;*/
            text-align: center;
            font-size: 16px;
        }
        .two_3{
            /*width: 495px;*/
            border: 1px solid #000;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 16px;
        }
        h1{
            white-space: nowrap;
            text-align: center;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: #000;
            margin: 8px 0 8px 0;
        }
        p{
            white-space: nowrap;
            text-align: center;
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 15px 0 15px 0;
            padding-left:390px;
        }
        .b{
            height: 285.6px;
        }
        input{
            outline: none;
        }
        .wz{
            width: 87.5px;
            height: 40px;
            text-align: center;
            border: none;
            overflow: hidden;
        }
        .wz1{
            width: 90%;
            height: 40px;
            text-align: left;
            border: none;
            overflow: hidden;
            margin: 0 10px;
        }
        .wz2{
            width: 90%;
            height: 90%;
            margin-top: 5px;
            /*text-align: center;*/
            /*line-height: 280px;*/
            border: none;
            outline: none;
            resize:none;
            overflow: hidden;
            margin: 10px 10px;
        }
        .wz5{
            width: 90%;
            height: 40px;
            text-align: left;
            border: none;

            overflow: hidden;
        }
    </style>
</head>
<body>
    <table>
        <h1>陶然庭苑社区来电来访接待办理登记表</h1>
        <p>编号：{{$register['number']}}</p>
        <tr>
            <td class="one">来电者姓名</td>
            <td class="one">
                <input class="wz" type="text" value="{{$register['name']}}">
            </td>
            <td class="one">性别</td>
            <td class="one">
                <input class="wz" type="text" value="@if($register['sex']==1)男@else女@endif">
            </td>
            <td class="one">来电时间</td>
            <td class="one">{{$register['call_time']}}</td>
        </tr>
        <tr>
            <td class="one">家庭住址</td>
            <td class="two" colspan="3">
                <input class="wz1" type="text" value="{{$register['address']}}">
            </td>
            <td class="one">联系电话</td>
            <td class="one">
                <input class="wz" type="text"  value="{{$register['phone']}}">
            </td>
        </tr>
         <tr class="b">
            <td class="one_1">来电主要内容</td>
            <td class="two_2" colspan="5">
                <textarea class="wz2" >{{$register['call_content']}}</textarea>
            </td>
        </tr>
        <tr class="b">
            <td class="one_1">办理结果</td>
            <td class="two_2" colspan="5">
                <textarea class="wz2" >{{$register['back_content']}}</textarea>
            </td>
        </tr>
       
        <tr>
            <td class="one">备注</td>
            <td class="two_3" colspan="5">
                <input class="wz5" type="text" value="{{$register['other']}}">
            </td>
        </tr>
        <tr>
            <td class="one_3" colspan="2">接电话人签字:</td>
            <td class="one_4" colspan="2">办理人签字:</td>
            <td class="one_5" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日</td>
        </tr>
    </table>
</body>
</html>