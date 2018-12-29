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
                        <a href="{{route('drath_proofs.index')}}">死亡证明</a>
                    </li>
                                        <li class="active">详细信息</li>
                                        </ul>
                </div>
    <div class="page-body">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link" href="{{ route('drath_proofs.index') }}"><i class="glyphicon glyphicon-backward"></i> 返回</a>
            </div>
            <div class="col-md-6">
                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('drath_proofs.edit', $drath_proof->id) }}">
                    <i class="glyphicon glyphicon-edit"></i> 修改
                </a>
                <a class="btn btn-sm btn-success pull-right" href="{{ route('export', ['type'=>'death_proof','id'=>$drath_proof->id]) }}" style="margin-right:15px;">
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
                                    <td>{{ $drath_proof->number }}</td>        
                                </tr>
                                <tr>
                                    <td>姓名:</td>
                                    <td>{{ $drath_proof->name }}</td>        
                                </tr>
                                <tr>
                                    <td>身份证号:</td>
                                    <td>{{ $drath_proof->id_number }}</td>        
                                </tr>
                                <tr>
                                    <td>户籍地址:</td>
                                    <td>{{ $drath_proof->residence_address }}</td>        
                                </tr>
                                <tr>
                                    <td>现住地址:</td>
                                    <td>{{ $drath_proof->present_address }}</td>        
                                </tr>
                                <tr>
                                    <td>死亡时间:</td>
                                    <td>{{ $drath_proof->death_date }}</td>        
                                </tr>
                                <tr>
                                    <td>死亡地址:</td>
                                    <td>{{ $drath_proof->death_address }}</td>        
                                </tr>
                                <tr>
                                    <td>申请人:</td>
                                    <td>{{ $drath_proof->applicant }}</td>        
                                </tr>
                                <tr>
                                    <td>与死者关系:</td>
                                    <td>
                                        @switch( $drath_proof->death_relation)
                                            @case(1)
                                                配偶
                                            @break
                                            @case(2)
                                                子女
                                            @break
                                            @case(3)
                                                父母
                                            @break
                                        @endswitch
                                    </td>        
                                </tr>
                                <tr>
                                    <td>申请人身份证:</td>
                                    <td>{{ $drath_proof->applicant_id_number }}</td>        
                                </tr>
                                <tr>
                                    <td>代理人:</td>
                                    <td>{{ $drath_proof->agent }}</td>        
                                </tr>
                                <tr>
                                    <td>代理人与申请人关系:</td>
                                    <td>{{ $drath_proof->application_relation }}</td>        
                                </tr>
                                <tr>
                                    <td>代理人身份证号:</td>
                                    <td>{{ $drath_proof->agent_id_number }}</td>        
                                </tr>
                                <tr>
                                    <td>其他需要说明的情况:</td>
                                    <td>{{ $drath_proof->other }}</td>        
                                </tr>
                                <tr>
                                    <td>图片:</td>
                                    <td>
                                        @if($drath_proof->images)
                                        @foreach(json_decode($drath_proof->images) as $image)
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
