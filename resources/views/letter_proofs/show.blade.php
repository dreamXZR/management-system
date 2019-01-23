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
                        <a href="{{route('letter_proofs.index')}}">证明信</a>
                    </li>
                                        <li class="active">详细信息</li>
                                        </ul>
                </div>
        <div class="page-body">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link" href="{{ route('letter_proofs.index') }}"><i class="glyphicon glyphicon-backward"></i> 返回</a>
            </div>
            <div class="col-md-6">
                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('letter_proofs.edit', $letter_proof->id) }}">
                    <i class="glyphicon glyphicon-edit"></i> 修改
                </a>
                <a class="btn btn-sm btn-success pull-right" href="{{ route('export', ['type'=>'letter_proof','id'=>$letter_proof->id]) }}" style="margin-right:15px;">
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
                                    <td>{{ $letter_proof->number }}</td>        
                                </tr>
                                <tr>
                                    <td>证明人:</td>
                                    <td>{{ $letter_proof->name }}</td>        
                                </tr>
                                <tr>
                                    <td>社区名称：</td>
                                    <td>{{ $letter_proof->community_name }}</td>        
                                </tr>
                                <tr>
                                    <td>居住地址：</td>
                                    <td>{{ $letter_proof->present_address }}</td>        
                                </tr>
                                <tr>
                                    <td>户籍地址：</td>
                                    <td>{{ $letter_proof->residence_address }}</td>        
                                </tr>
                                <tr>
                                    <td>使用：</td>
                                    <td>{{ $letter_proof->use }}</td>        
                                </tr>
                                <tr>
                                    <td>依据：</td>
                                    <td>{{ $letter_proof->basis }}</td>        
                                </tr>
                                <tr>
                                    <td>自定义信息：</td>
                                    <td>{{ $letter_proof->self }}</td>        
                                </tr>
                                <tr>
                                    <td>图片：</td>
                                    <td>
                                        @if($letter_proof->images)
                                        @foreach(json_decode($letter_proof->images) as $image)
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
