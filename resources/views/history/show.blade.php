@extends('layouts.app')
@section('content')

	<div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li>
                        <a href="{{route('informations.index')}}">信息卡</a>
                    </li>
                                        <li class="active">历史记录</li>
                    </ul>
    			</div>
    	<div class="page-body">
	        <div class="row">
	            
	            <div class="col-lg-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active">
                                <a data-toggle="tab" href="#detail">
                                    详细信息
                                </a>
                            </li>

                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    相关记录
                                    <b class="caret"></b>
                                </a>

                                <ul class="dropdown-menu dropdown-blue">
                                    <li>
                                        <a data-toggle="tab" href="#register">来访登记</a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#above">上门登记</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#problem">问题汇总</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="detail" class="tab-pane active">
                                @include('history._detail')
                            </div>

                            

                            <div id="register" class="tab-pane">
                                @include('history._register')
                            </div>

                            <div id="above" class="tab-pane">
                                @include('history._above')
                            </div>
                            <div id="problem" class="tab-pane">
                                @include('history._problem')
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-space"></div>

                </div>
	            
	                
	            </div> 
	        </div>
    	</div>
    </div>
@stop