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
	                 <a class="btn btn-sm btn-warning pull-right" href="">
	                    <i class="glyphicon glyphicon-edit"></i> 修改
	                </a>
	            </div>
	            <div class="col-lg-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
	                <div class="widget">
	                    <div class="widget-header bordered-left bordered-blueberry">
	                        <span class="widget-caption">详细信息</span>
	                    </div><!--Widget Header-->
	                    <div class="widget-body bordered-left bordered-blue">
	                        
	                        <p>户籍地址:{{ $information->residence_address }}</p> 
	                        <p>户籍性质:{{ $information->residence_status }}</p>
	                        <p>房屋状态:{{ $information->house_status }}</p>
	                        <p>房屋使用情况:{{ $information->house_people }}</p>
	                        <p>住户情况:{{ $information->people }}</p>
	                        <p>家庭状况:{{ $information->situation }}</p>
	                        <p>备注:{{ $information->other }}</p>
	                        <p>家庭成员:</p>
	                        <div class="table-scrollable">
			                    <table class="table table-striped table-bordered table-hover">
			                        <thead>
			                            <tr>
			                            	<th scope="col">
			                            		选择
			                            	</th>
			                                <th scope="col">
			                                    现居住地
			                                </th>
			                                
			                                <th scope="col">
			                                    姓名
			                                </th>
			                                <th scope="col">
			                                    与户主关系
			                                </th>
			                                <th scope="col">
			                                    性别
			                                </th>
			                                <th scope="col">
			                                    民族
			                                </th>
			                                <th scope="col">
			                                    出生年月
			                                </th>
			                                <th scope="col">
			                                    文化程度
			                                </th>
			                                <th scope="col">
			                                    政治面貌
			                                </th>
			                                <th scope="col">
			                                    婚姻状况
			                                </th>
			                                <th scope="col">
			                                    身份类别
			                                </th>
			                                <th scope="col">
			                                    有何特长
			                                </th>
			                                <th scope="col">
			                                    身份证号码
			                                </th>
			                                <th scope="col">
			                                    工作单位及职务
			                                </th>
			                                <th scope="col">
			                                    联系电话
			                                </th>
			                                <th scope="col">
			                                    职位标签
			                                </th>
			                                <th scope="col">
			                                    备注
			                                </th>

			                            </tr>
			                        </thead>
			                        <tbody>
			                        	@foreach($residents as $resident)
			                        		 <tr>
			                        		 	<td>
			                        		 		<input type="radio" name="select" style="position: initial;opacity: 1;" onclick="check({{$resident->id}})">
			                        		 	</td>
				                                <td>
				                                    {{$resident->present_address}}
				                                </td>
				                                <td>
				                                   {{$resident->name}}
				                                </td>
				                                <td>
				                                    {{$resident->relationship}}
				                                </td>
				                                <td>
				                                    {{$resident->sex}}
				                                </td>
				                                <td>
				                                    {{$resident->nation}}
				                                </td>
				                                <td>
				                                    {{$resident->birthday}}
				                                </td>
				                                <td>
				                                    {{$resident->culture}}
				                                </td>
				                                <td>
				                                    {{$resident->face}}
				                                </td>
				                                <td>
				                                    {{$resident->marriage}}
				                                </td>
				                                <td>
				                                    {{$resident->identity}}
				                                </td>
				                                <td>
				                                    {{$resident->hobby}}
				                                </td>
				                                <td>
				                                	{{$resident->id_number}}
				                                </td>
				                                <td>
				                                	{{$resident->unit}}
				                                </td>
				                                 <td>
				                                	{{$resident->phone}}
				                                </td>
				                                <td>
				                                	{{$resident->tag}}
				                                </td>
				                                <td>
				                                	{{$resident->other}}
				                                </td>
				                            </tr>
			                        	@endforeach
			                        </tbody>
			                    </table>
			                </div>
	                        <p>残疾人员:</p>
	                        <div class="table-scrollable">
			                    <table class="table table-striped table-bordered table-hover">
			                        <thead>
			                            <tr>
			                                
			                                <th scope="col">
			                                    残疾人姓名
			                                </th>
			                                <th scope="col">
			                                    残疾人证号
			                                </th>
			                                <th scope="col">
			                                    残疾人类别
			                                </th>
			                                <th scope="col">
			                                    残疾人等级
			                                </th>

			                            </tr>
			                        </thead>
			                        <tbody>
			                        	@foreach($handicappeds as $handicapped)
			                        		<tr>
			                        			<td>{{$handicapped->name}}</td>
			                        		</tr>
			                        		<tr>
			                        			<td>{{$handicapped->number}}</td>
			                        		</tr>
			                        		<tr>
			                        			<td>{{$handicapped->type}}</td>
			                        		</tr>
			                        		<tr>
			                        			<td>{{$handicapped->level}}</td>
			                        		</tr>
			                        	@endforeach
			                        </tbody>
			                    </table>
			                </div>
			                <div class="line_01">功能列表</div>
	                        <div>
	                        	<button class="btn btn-blue">替换信息卡</button>
	                        	<button class="btn btn-blue">问题汇总</button>
	                        	<button class="btn btn-blue">上门登记</button>
	                        	<a class="btn btn-blue" href="{{route('register_tables.create')}}">来访登记</a>
	                        	<button class="btn btn-blue" onclick="letter_proof()">开证明信</button>
	                        	<a class="btn btn-blue" href="{{route('worker_proofs.create')}}">就业证明</a>
	                        	<a class="btn btn-blue" href="{{route('drath_proofs.create')}}">死亡证明</a>
	                        </div>
	                    </div><!--Widget Body-->
	                </div><!--Widget-->
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