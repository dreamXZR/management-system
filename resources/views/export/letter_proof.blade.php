<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>证明信</title>
    <style>
        html,body{
            width: 794px;
            height: 1123px;
            margin: 0 auto;
           
        }
        *{
            margin:0;
            padding:0;
            /*font-family: "微软雅黑";*/
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
        .top{
            /*width: 595px;*/
            height: 55%;
            border-bottom: 2px dashed #000;
        }
        h1{
            white-space: nowrap;
            text-align: center;
            margin: 20px 0 20px;
            font-size: 40px;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
          	letter-spacing: 4px;
        }
        .box{
            margin-left: 50px;
        }
        .text_1{
            white-space: nowrap;
            text-align: left;
            font-size: 24px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 13px 0;
        }
        .display{
            display: inline-block;
        }
        .lump{
            text-align: center;
            display: inline-block;
            width: 120px;
            font-size: 24px;
            font-weight: 400;
            padding: 0 0;
            margin: 0 5px;
            border: none;
            border-bottom: 1px solid #000;
        }
        .lump_1{
            display: inline-block;
            width: 600px;
            font-size: 24px;
            font-weight: 400;
            padding: 0 5px;
            margin: 0 10px;
            border: none;
            border-bottom: 1px solid #000;
            text-align: center;
        }
        .lumpw{
            width: 150px;
        }
        input{
            outline: none;
        }
        .number{
            white-space: nowrap;
            text-align: right;
            font-size: 24px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 12px 0;
            margin-right: 50px;
        }
        .box .pos{
            position: absolute;
            right: 60px;
        }
        .right_1{
            margin: 30px 20px 0 0;
            text-align: right;
            position: relative;
        }
        .mar_30{
            margin-right: 20px;
        }
        .lump50{
            width: 40px;
        }
        .below{
            margin-top: 20px;
        }
        .mar_50{
            margin-left: 170px;
        }
        .mar_50_1{
            margin-left: 120px;
        }
    </style>
</head>
<body>
<div class="top">
    <h1>证明存根</h1>
    <p class="number">编号：{{$letter['number']}}</p>
    <div class="box">
        <p class="text_1 display">
            兹证明<input class="lump " style='width: 648px;  '  type="text" value="{{$letter['name']}}">
        </p>
        <p class="text_1 display">
            系我二号桥街<input class="lump lumpw"  style='width: 470px;' type="text" value="{{$letter['community_name']}}"><span>社区居民。</span>
        </p>
        <p class="text_1 display">
            居住地址:<input class="lump_1" type="text" value="{{$letter['present_address']}}">
        </p>
        <p class="text_1 display">
            户籍地址:<input class="lump_1" type="text" value="{{$letter['residence_address']}}">
        </p>
        <p class="text_1 display">
            此证明用于<input class="lump" type="text" style="width: 550px;" value="{{$letter['use']}}"><span>使用。</span>
        </p>
        <p class="text_1 display">
            此证明依据<input class="lump lumpw" type="text" style="width: 550px;" value="{{$letter['basis']}}">
        </p>
        <div class="right_1">
            <div class="right mar_30">
                <p class="text_1 display ">
                    二号桥街<input class="lump" type="text" value="{{$letter['community_name']}}"><span>社区居委会</span>
                </p>
            </div>
            <div class="clear"></div>
            <p class="text_1 display m10"><input class="lump lump50" style="width: 70px; text-align: center;" type="text" value="{{$letter['date'][0]}}"><span>年</span><input class="lump lump50" type="text" value="{{$letter['date'][1]}}"><span>月</span><input class="lump lump50" type="text" value="{{$letter['date'][2]}}"><span>日</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
        </div>
      	 <p style='position: absolute; top: 480px; font-size: 24px;'>
           	开据人:
            <input class="lump" type="text" value="{{$letter['charge']}}">
        </p>
        <p style=' margin-top: -40px; font-size: 24px;'>
            签字确认:
            <input class="lump" type="text" value="">
        </p>
    </div>
</div>
<div class="bottom">
    <h1>证明信</h1>
    <p class="number">编号：{{$letter['number']}}</p>
    <div class="box">
       <!--<p class="text_1 ">兹证明</p>-->
      	<p class="text_1 display"  style=' height: 23px; border-bottom: 1px solid #000; float: left; padding-right: 5px; padding-bottom: 5px;'>{{$letter['self']}}</p>
      	<p class="text_1 " style="float: left;">：</p>
      	<div style="clear: both"></div>
        <p class="text_1 display">
            <input class="lump" style='width: 595px;text-align: center;' value="{{$letter['name']}}"><span>同志系我街</span>
            
        </p>
      	<p  class="text_1 display"> <input class="lump lumpw" style='width: 610px;' value="{{$letter['community_name']}}"><span>社区居民。</span></p>
        <p class="text_1 display">
          	居住地址:<input class="lump_1"  type="text" value="{{$letter['present_address']}}">
        </p>
        <p class="text_1 display">
            户籍地址:<input class="lump_1" type="text" value="{{$letter['residence_address']}}">
        </p>
        <p class="text_1 display">
            此证明用于<input class="lump" type="text" style="width: 550px;" value="{{$letter['use']}}"><span>使用。</span>
        </p>
        <p class="text_1 display">
            此证明依据<input class="lump lumpw" type="text" style="width: 550px;" value="{{$letter['basis']}}">
        </p>
        <div class="below">
            <p class="text_1 display">
                二号桥街<input class="lump" type="text" value="{{$letter['community_name']}}"><span>社区居委会</span>
            </p>
            <p class="text_1 display mar_50_1">二号桥街道办事处</p>
            <p class="text_1 display"><input class="lump lump50" style="width: 70px; text-align: center;" value="{{$letter['date'][0]}}"><span>年</span><input class="lump lump50" value="{{$letter['date'][1]}}"><span>月</span><input class="lump lump50" value="{{$letter['date'][2]}}"><span>日</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
            <p class="text_1 display mar_50"><input class="lump lump50" style="width: 70px; text-align: center; margin-left: -20px;" value="{{$letter['date'][0]}}"><span>年</span><input class="lump lump50" value="{{$letter['date'][1]}}"><span>月</span><input class="lump lump50" value="{{$letter['date'][2]}}"><span>日</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></p>
        </div>
    </div>
</div>
</body>
</html>