<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>居民信息卡</title>
    <style>
        html,body{
            width: 894px;
            height: 1223px;
            margin: 0 auto;
            margin-top: 60px;
        }
        *{
            margin:0;
            padding:0;
            /*font-family: "微软雅黑";*/
            /*font-style: 12px;*/
        }
        .box{
           
           	width: 884px;
            height: 1223px;

            /*border-right: 1px solid #000;*/
            padding: 0 10px;


        }ul li{
             list-style:none;
         }
        .clear{
            clear:both;
        }
        .left{
            float: left;
        }
        table {
            width: 100%;
            box-sizing: border-box;
            /*font-family: 微软雅黑;*/
            /*cellspacing: 0;*/
            /*cellpadding: 0;*/
            border-collapse:collapse;
            /*margin: 0 10px;*/
            /*width: 595px;*/
            /*border: 1px solid #000;*/
        }

        input{
            outline: none;
            border: none;
        }
        table tr td {

            /*border: 1px solid #000;*/

        }
        .one{
            height: 60px;
            font-size: 20px;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            box-sizing: border-box;
            z-index: 1;
            overflow: hidden;
        }
        .one .one_1{
            text-align: center;
        }
        .tow{
            height: 50px;
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            /*line-height: 15px;*/
            overflow: hidden;
            box-sizing: border-box;
            text-align: center;
        }
        .tow_5{
            padding: 5px 0;
        }
        .three{
            font-size: 16px;
            height: 50px;
        }
        .tow_1{
            text-align: center;
            width: 180px;
        }
        .four{
            font-size: 16px;
            text-align: center;

        }
        .xx{
            width: 77px;
            height: 60px;
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;

        }
        .xm{
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        .relation{
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        .sex{
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        .w145{
            width: 180px;
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        .w133{
            border-bottom: 1px solid #000;
            border-right: 1px solid #000;
        }
        .w133 p{
            width: 160px;
            /*overflow: hidden;*/
            /*text-overflow: ellipsis;*/
            /*white-space: nowrap;*/
            /*display: -webkit-box;*/
            height: 50px;
            /*line-height: 32px;*/
            margin: 0 auto;


        }
        .footer{
            font-size: 16px;
            text-align: center;
        }
        .bor{
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        .bor_1{
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        .six{
            font-size: 16px;
            text-align: center;
            height: 32px;
        }
    </style>
</head>
<body>
<div class="box">
    <table style="border: 1px solid #000;">

        <tr class="one" style="border: 1px solid #000;">
            <th class="one_1" colspan="10" style="border-right: 1px solid #000;">二号桥街道社区居民基本情况信息卡</th>
        </tr>

        <tr class="tow">
            <td class="tow_1" style="border: 1px solid #000;">现居住地详细地址</th>
            <td class="tow_2" style="border: 1px solid #000; padding: 0 10px;">
                <input style="width: 100%;" class="tow_2_input" name="address" type="text" value="{{$info['present_address']}}庭苑{{$info['building']}}-{{$info['door']}}-{{$info['no']}}" />
            </td>
            <td class="tow_3" style="border: 1px solid #000;">户籍性质</td>
            <td class="tow_4" style="border: 1px solid #000;">
                <input style="width: 80px;" type="text" value="{{$info['residence_status']}}">
            </td>
            <td class="tow_5" style="border: 1px solid #000;">
                <input style="width: 100px;" type="text" value="{{$info['house_status']}}">
            </td>
        </tr>
		<table class="three">
           <tr >
             <td class="tow_1" style="border: 1px solid #000;">
                房屋使用情况
            </td>
            <td class="tow_1" style="border: 1px solid #000; width: 70px;">
                <input style="width: 60px; text-align: center;" type="text" value="{{$info['house_people']}}">
            </td>
            <td class="three_1" colspan="4" style="text-align: center; border: 1px solid #000; padding: 0 10px;">
                <input style="width: 100%;" type="text" value="{{$info['people']}}">
            </td>
        </tr>
        </table>
       
		
        <tr class="four">
            <table class="six" style="border-left: 1px solid #000">
                <tr>
                    <td class="xm" style="width: 60px; height: 32px; ">姓名</td>
                    <td class="relation " style="width: 90px; ">与户主关系</td>
                    <td class="sex" style="width: 50px; ">性别</td>
                    <td class="xx">民族</td>
                    <td class="xx">出生年月</td>
                    <td class="xx">文化程度</td>
                    <td class="xx">政治面貌</td>
                    <td class="xx">婚姻状况</td>
                    <td class="xx">身份类别</td>
                   
                    <td class="w145">身份证号码</td>
                    <td class="w133">工作单位及职务</td>
                </tr>
                @foreach($residents as $v)
                <tr>
                    <td class="xm" style="width: 60px; height: 32px; ">{{$v->name}}</td>
                    <td class="relation " style="width: 65px; ">{{$v->relationship}}</td>
                    <td class="sex" style="width: 60px; ">{{$v->sex}}</td>
                    <td class="xx">{{$v->nation}}</td>
                    <td class="xx">{{$v->birthday}}</td>
                    <td class="xx">{{$v->culture}}</td>
                    <td class="xx">{{$v->face}}</td>
                    <td class="xx">{{$v->marriage}}</td>
                  
                    <td class="xx">{{$v->identity}}</td>
                    <td class="w145">{{$v->id_number}}</td>
                    <td class="w133">
                        <p>
                           {{$v->unit}}
                        </p>
                    </td>
                </tr>
                @endforeach
                <?php for($i=0;$i<$fill[0];$i++){
                echo '
                <tr>
                    <td class="xm" style="width: 40px; height: 32px; "></td>
                    <td class="relation " style="width: 40px; "></td>
                    <td class="sex" style="width: 35px; "></td>
                    <td class="xx"></td>
                    <td class="xx"></td>
                    <td class="xx"></td>
                    <td class="xx"></td>
                    <td class="xx"></td>
                    <td class="xx"></td>
                    <td class="w145"></td>
                    <td class="w133">
                        <p>

                        </p>
                    </td>
                </tr>
                ';
                 }?>
                
            </table>
        </tr>
        <tr class="footer">
            <table>
              <table style="width: 50%; height: 356px;  float: left; font-size: 16px; text-align: center;">
                    <tr style="height: 40%;">
                        <td class="bor_1" style="border-left:  1px solid #000;">家庭状况</td>
                        <td   style="border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                <textarea class="condition" style="border: none; outline: none; resize:none; " > {{$info['situation']}}</textarea>
                        </td>
                    </tr>
                    <tr style="height: 60%;">
                        <td class="bor_1" style="border-left:  1px solid #000;" >备注</td>
                        <td   style="border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <textarea class="condition" style="border: none; outline: none; resize:none; " >{{$info['other']}} </textarea>
                        </td>
                    </tr>
                </table>
                <table style="width: 50%; height: 352px; font-size: 16px; text-align: center; border-left: 1px solid #000; float: left;">
                    <tr>
                        <td class="footer_1 bor" style="height: 70px; width: 60px;">残疾人姓名</td>
                        <td class="footer_2 bor" style="height: 70px; width: 140px;">残疾人证号</td>
                        <td class="footer_3 bor" style="height: 70px; width: 50px;">残疾类别</td>
                        <td class="footer_5 br bor" style="height: 70px; width: 50px;">残疾等级</td>
                    </tr>
                    @foreach($handicappeds as $v)
                    <tr>
                        <td class="footer_1 bor" style="height: 70px; width: 60px;">
                            {{$v->name}}
                        </td>
                        <td class="footer_2 bor" style="height: 70px; width: 140px;">
                            {{$v->number}}
                        </td>
                        <td class="footer_3 bor" style="height: 70px; width: 50px;">
                            {{$v->type}}
                        </td>
                        <td class="footer_5 br bor" style="height: 70px; width: 50px;">
                            {{$v->level}}
                        </td>
                    </tr>
                    @endforeach
                    <?php for($i=0;$i<$fill[1];$i++){
                    echo '<tr><td class="footer_1 bor" style="height: 70px; width: 60px;"></td>
                        <td class="footer_2 bor" style="height: 70px; width: 140px;"></td>
                        <td class="footer_3 bor" style="height: 70px; width: 50px;"></td>
                        <td class="footer_5 br bor" style="height: 70px; width: 50px;"></td>
                    </tr>';
                }?>
                </table>
                
                <div class="clear"></div>
            </table>
        </tr>
    </table>
</div>
</body>
</html>