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
                        <a href="{{route('register_tables.index')}}">来访登记</a>
                    </li>
                                        <li class="active">详细信息</li>
                                        </ul>
                </div>
        <div class="page-body">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link" href="{{ route('register_tables.index') }}"><i class="glyphicon glyphicon-backward"></i> 返回</a>
            </div>
            <div class="col-md-6">
                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('register_tables.edit', $register_table->id) }}">
                    <i class="glyphicon glyphicon-edit"></i> 修改
                </a>
                <a class="btn btn-sm btn-success pull-right" href="{{ route('export', ['type'=>'register_table','id'=>$register_table->id]) }}" style="margin-right:15px;">
                        <i class="glyphicon glyphicon-export"></i> 导出
                    </a>
            </div>
            <div class="col-lg-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                <div class="widget">
                    <div class="widget-header bordered-left bordered-blueberry">
                        <span class="widget-caption">详细信息</span>
                    </div><!--Widget Header-->
                    <div class="widget-body bordered-left bordered-blue">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td>编号:</td>
                                    <td>{{ $register_table->number }}</td>        
                                </tr>
                                <tr>
                                    <td>来电者姓名:</td>
                                    <td>{{ $register_table->name }}</td>        
                                </tr>
                                <tr>
                                    <td>居民类别:</td>
                                    <td>{{resident_type_format($register_table->resident_type) }}</td>
                                </tr>
                                <tr>
                                    <td>来电时间:</td>
                                    <td>{{ $register_table->call_time }}</td>        
                                </tr>
                                <tr>
                                    <td>性别:</td>
                                    <td>
                                        @if($register_table->sex==1)
                                        男
                                        @else
                                        女
                                        @endif
                                    </td>        
                                </tr>
                                <tr>
                                    <td>家庭地址:</td>
                                    <td>{{ $register_table->address}}</td>        
                                </tr>
                                <tr>
                                    <td>联系电话:</td>
                                    <td>{{ $register_table->phone}}</td>        
                                </tr>
                                <tr>
                                    <td>来电来访主要内容:</td>
                                    <td>{{ $register_table->call_content}}</td>        
                                </tr>
                                <tr>
                                    <td>办理结果:</td>
                                    <td>{{ $register_table->back_content}}</td>        
                                </tr>
                                <tr>
                                    <td>备注:</td>
                                    <td>{{ $register_table->other}}</td>        
                                </tr>
                                <tr>
                                    <td>图片:</td>
                                    <td>
                                        @if($register_table->images)
                                        @foreach(json_decode($register_table->images) as $image)
                                        <a href="{{env('APP_URL').'/'}}{{$image}}" download="{{substr($image,strripos($image,'/')+1)}}">
                                            <img src="{{env('APP_URL').'/'}}{{$image}}" width="100px;">
                                        </a>
                                        @endforeach
                                        @endif
                                    </td>        
                                </tr>
                                <tr>
                                    <td>主要责任</td>
                                    <td>{{getLiabilityStr($register_table->main)}}</td>
                                </tr>
                                <tr>
                                    <td>次要责任</td>
                                    <td>{{getLiabilityStr($register_table->secondary)}}</td>
                                </tr>
                                <tr>
                                    <td>参与住户</td>
                                    <td>{{getLiabilityStr($register_table->join)}}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div><!--Widget Body-->
                </div><!--Widget-->
            </div>
        </div>
    </div>
</div>

@endsection
