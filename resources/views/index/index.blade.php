@extends('layouts.app')
@section('content')

<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                
                <a href="{{route('index')}}">系统</a>
            </li>
            
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

            <div style="text-align:center;">
                <a href="#">
                    <div class="lump">
                        <div class="number">{{$info_num}}</div>
                        <div class="text">小区户数</div>
                        <img class="img" src="{{asset('assets/img/34FEF3C17B339EB05AED4042828690F5.png')}}" />
                        <div class="bottom" onclick="window.location.href='{{route('informations.index')}}'">
                           
                                <span style="margin-left:21px">更多</span>
                                <img src="{{asset('assets/img/more.png')}}" style="margin-left:10px" width="22px" height="22px" />
                            
                            
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="lump1">
                        <div class="number">{{$resident_num}}</div>
                        <div class="text">住户人数</div>
                        <img class="img1" src="{{asset('assets/img/1D02C376C9DF57C5DE361AC38A9A9220.png')}}" />
                        <div class="bottom1" onclick="window.location.href='{{route('residents.index')}}'">
                            <span style="margin-left:21px">更多</span>
                            <img src="{{asset('assets/img/more.png')}}" style="margin-left:10px" width="22px" height="22px" />
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="lump m0 back">
                        <div class="number">{{$register_num}}</div>
                        <div class="text">今日来访</div>
                        <img class="img2" src="{{asset('assets/img/05ECE6CDFF5C6D3C98D6470B0408D453.png')}}" />
                        <div class="bottom bottom2" onclick="window.location.href='{{route('register_tables.index')}}'">
                            <span style="margin-left:21px">更多</span>
                            <img src="{{asset('assets/img/more.png')}}" style="margin-left:10px" width="22px" height="22px" />
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="lump1 m0 lump2">
                        <div class="number">{{$letter_num}}</div>
                        <div class="text">开证明信</div>
                        <img class="img3" src="{{asset('assets/img/60BC7494E8D2607A8183A3CAA4196967.png')}}" />
                        <div class="bottom1 bottom3" onclick="window.location.href='{{route('letter_proofs.index')}}'">
                            <span style="margin-left:21px">更多</span>
                            <img src="{{asset('assets/img/more.png')}}" style="margin-left:10px" width="22px" height="22px" />
                        </div>
                    </div>
                </a>
            </div>

        </div>


    </div>
    <!-- /Page Body -->
                
</div>
<style type="text/css">

.lump{
    width: 40%;
    height: 190px;
    float: left;
    border: 0px solid #000;
    background: #f60;
    position: relative;
    margin: 50px 30px 30px 50px;
}

.lump1{
    float: left;
    width: 40%;
    height: 190px;
    border: 0px solid #000;
    background: #00c0ef;
    position: relative;
    margin: 50px 30px 30px 30px;
}

.lump2{
    background: #00a65a;
}

.m0{
    margin-top: 0;
}

.back{
    background: #f39c12;
}

.number{
    width: 170px;
    height: 42px;
    font-weight: 700;
    color: #fff;
    font-size: 32px;
    line-height: 42px;
    padding-top:25px ;
    margin: 0px 0 35px;
    font-family: '微软雅黑';
    overflow-wrap: break-word;
    word-break: break-word;
}

.text{
    font-size: 20px;
    color: #fff;
    font-weight: 700;
    width: 170px;
    height: 42px;
    line-height: 42px;
    padding-top: 25px;
}

.img{
    width: 170px;
    height: 160px;
    line-height: 160px;
    position: absolute;
    right: 0;
    top: 0;
}

.img1{
    width: 175px;
    height: 150px;
    line-height: 150px;
    position: absolute;
    right: 0;
    top: 0;
}

.img2{
    width: 162px;
    height: 153px;
    line-height: 153px;
    position: absolute;
    right: 0;
    top: 0;
}

.img3{
    width: 164px;
    height: 154px;
    line-height: 154px;
    position: absolute;
    right: 0;
    top: 0;
}

.bottom{
    width: 100%;
    height: 37px;
    
    margin-top: 34px;
    background: #cf5606;
    line-height: 37px;
    font-size: 14px;
    font-weight: 400;
    color: #fff;
}

.bottom1{
    width: 100%;
    height: 37px;
    
    margin-top: 34px;
    background: #08b3f9;
    line-height: 37px;
    font-size: 14px;
    font-weight: 400;
    color: #fff;
}

.bottom2{
    background: #ce830b;
}

.bottom3{
    background: #019450;
}
</style>
@stop