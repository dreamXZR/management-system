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
                        <a href="{{route('worker_proofs.index')}}">就业证明</a>
                    </li>
                                        <li class="active">详细信息</li>
                                        </ul>
                </div>
        <div class="page-body">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link" href="{{ route('worker_proofs.index') }}"><i class="glyphicon glyphicon-backward"></i> 返回</a>
            </div>
            <div class="col-md-6">
                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('worker_proofs.edit', $worker_proof->id) }}">
                    <i class="glyphicon glyphicon-edit"></i> 修改
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
                                    <td>{{ $worker_proof->number }}</td>        
                                </tr>
                                <tr>
                                    <td>姓名:</td>
                                    <td>{{ $worker_proof->name }}</td>        
                                </tr>
                                <tr>
                                    <td>身份证号:</td>
                                    <td>{{ $worker_proof->id_number }}</td>        
                                </tr>
                                <tr>
                                    <td>现住地址:</td>
                                    <td>{{ $worker_proof->present_address }}</td>        
                                </tr>
                                <tr>
                                    <td>联系电话:</td>
                                    <td>{{ $worker_proof->phone }}</td>        
                                </tr>
                                <tr>
                                    <td>灵活就业内容:</td>
                                    <td>{{ $worker_proof->worker_content }}</td>        
                                </tr>
                                <tr>
                                    <td>工作地点:</td>
                                    <td>{{ $worker_proof->worker_place }}</td>        
                                </tr>
                                <tr>
                                    <td>随迁子女:</td>
                                    <td>{{ $worker_proof->child_name }}</td>        
                                </tr>
                                <tr>
                                    <td>性别:</td>
                                    <td>
                                        @if($worker_proof->child_sex==1)
                                        男
                                        @else
                                        女
                                        @endif
                                       
                                    </td>        
                                </tr>
                                <tr>
                                    <td>身份证号:</td>
                                    <td>{{ $worker_proof->child_id_number }}</td>        
                                </tr>
                                <tr>
                                    <td>图片:</td>
                                    <td>
                                        @if($worker_proof->images)
                                        @foreach(json_decode($worker_proof->images) as $image)
                                        <a href="{{env('APP_URL').'/'}}{{$image}}" download="{{substr($image,strripos($image,'/')+1)}}">
                                            <img src="{{env('APP_URL').'/'}}{{$image}}" width="100px;">
                                        </a>
                                        @endforeach
                                        @endif
                                    </td>        
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
