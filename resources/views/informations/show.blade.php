@extends('layouts.app')
<style type="text/css">
.line_01{
	padding: 0 20px 0;
	margin: 50px 0;
	line-height: 1px;
	border-left: 200px solid #ddd;
	border-right: 200px solid #ddd;
	text-align: center;
}

</style>
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
                                        <li class="active">详细信息</li>
                    </ul>
    			</div>
    	<div class="page-body">
	        <div class="row">
	            <div class="col-md-6">
	                <a class="btn btn-link" href="{{ route('informations.index') }}"><i class="glyphicon glyphicon-backward"></i> 返回</a>
	            </div>
	            <div class="col-md-6">
	                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('informations.edit',$information->id) }}">
	                    <i class="glyphicon glyphicon-edit"></i> 修改
	                </a>
	            </div>
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
                            <li class="tab-red">
                                <a data-toggle="tab" href="#profile">
                                    历史记录
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="detail" class="tab-pane active">
                                @include('informations._detail')
                            </div>

                            

                            <div id="register" class="tab-pane">
                                @include('informations._register')
                            </div>

                            <div id="above" class="tab-pane">
                                @include('informations._above')
                            </div>
                            <div id="problem" class="tab-pane">
                                @include('informations._problem')
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-space"></div>

                </div>
	            
	                
	            </div> 
	        </div>
    	</div>
    </div>
<script type="text/javascript">
var select=0;
function check(id){
	
	select=id;
}
function letter_proof(){
	if(select==0){
		alert('请选择相应人员');
		return false;
	}
	window.location.href="{{env('APP_URL')}}" + "/letter_proofs/create?resident_id="+select; 
}
</script>
@stop