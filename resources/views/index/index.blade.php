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
        <div class="row">
           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="databox radius-bordered databox-shadowed databox-graded" onclick="window.location.href='{{route('informations.index')}}'">
                    <div class="databox-left bg-themesecondary">
                        <div class="databox-piechart">
                            <img class="img" src="{{asset('assets/img/34FEF3C17B339EB05AED4042828690F5.png')}}" width="48px;" />
                           
                        </div>
                    </div>
                    <div class="databox-right">
                        <span class="databox-number themesecondary">小区户数</span>
                        <div class="databox-text darkgray">{{$info_num}}</div>
                        <div class="databox-stat themesecondary radius-bordered">
                            <i class="stat-icon icon-lg fa fa-tasks"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="databox radius-bordered databox-shadowed databox-graded" onclick="window.location.href='{{route('residents.index')}}'">
                    <div class="databox-left bg-themeprimary">
                        <div class="databox-piechart">
                            <img class="img" src="{{asset('assets/img/1D02C376C9DF57C5DE361AC38A9A9220.png')}}" width="48px;" />
                           
                        </div>
                    </div>
                    <div class="databox-right">
                        <span class="databox-number themeprimary">住户人数</span>
                        <div class="databox-text darkgray">{{$resident_num}}</div>
                        <div class="databox-stat themeprimary radius-bordered">
                            <i class="stat-icon icon-lg fa fa-tasks"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="databox radius-bordered databox-shadowed databox-graded" onclick="window.location.href='{{route('register_tables.index')}}'">
                    <div class="databox-left " style="background-color:#F39C12;">
                        <div class="databox-piechart">
                            <img class="img" src="{{asset('assets/img/05ECE6CDFF5C6D3C98D6470B0408D453.png')}}" width="48px;" />
                           
                        </div>
                    </div>
                    <div class="databox-right">
                        <span class="databox-number" style="color:#F39C12;">今日来访</span>
                        <div class="databox-text darkgray">{{$register_num}}</div>
                        <div class="databox-stat  radius-bordered" style="color:#F39C12;">
                            <i class="stat-icon icon-lg fa fa-tasks"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="databox radius-bordered databox-shadowed databox-graded" onclick="window.location.href='{{route('letter_proofs.index')}}'">
                    <div class="databox-left " style="background-color:#00A65A;">
                        <div class="databox-piechart">
                            <img class="img" src="{{asset('assets/img/60BC7494E8D2607A8183A3CAA4196967.png')}}" width="48px;" />
                           
                        </div>
                    </div>
                    <div class="databox-right">
                        <span class="databox-number" style="color:#00A65A;">开证明信</span>
                        <div class="databox-text darkgray">{{$letter_num}}</div>
                        <div class="databox-stat radius-bordered" style="color:#00A65A;">
                            <i class="stat-icon icon-lg fa fa-tasks"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin: 0 auto; padding-top: 120px;">
            <img src="{{asset('assets/img/title.png')}}" >
        </div>
            
        </div>


    </div>
    <!-- /Page Body -->
                
</div>

@stop