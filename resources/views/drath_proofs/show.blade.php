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
            </div>
            <div class="col-lg-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                <div class="widget">
                    <div class="widget-header bordered-left bordered-blueberry">
                        <span class="widget-caption">详细信息</span>
                    </div><!--Widget Header-->
                    <div class="widget-body bordered-left bordered-blue">
                        <p>编号:{{ $drath_proof->number }}</p>
                        <p>姓名:{{ $drath_proof->name }}</p>
                        <p>身份证号:{{ $drath_proof->id_number }}</p>
                        <p>户籍地址:{{ $drath_proof->residence_address }}</p> 
                        <p>现住地址:{{ $drath_proof->present_address }}</p> 
                        <p>死亡时间:{{ $drath_proof->death_date }}</p> 
                        <p>死亡地址:{{ $drath_proof->death_address }}</p> 
                        <p>申请人:{{ $drath_proof->applicant }}</p>
                        <p>与死者关系:
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
                        </p>
                        <p>申请人身份证:{{ $drath_proof->applicant_id_number }}</p>
                        <p>代理人:{{ $drath_proof->agent }}</p>
                        <p>代理人与申请人关系:{{ $drath_proof->application_relation }}</p>
                        <p>代理人身份证号:{{ $drath_proof->agent_id_number }}</p>
                        <p>其他需要说明的情况:{{ $drath_proof->other }}</p>
                        <p>图片:</p>
                        
                    </div><!--Widget Body-->
                </div><!--Widget-->
            </div>
        </div>
    </div>
</div>


@endsection
