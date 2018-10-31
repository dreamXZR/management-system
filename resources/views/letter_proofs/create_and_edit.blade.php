@extends('layouts.app')

@section('content')

<!-- <div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> LetterProof /
                    @if($letter_proof->id)
                        Edit #{{$letter_proof->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($letter_proof->id)
                    <form action="{{ route('letter_proofs.update', $letter_proof->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('letter_proofs.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $letter_proof->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="community_name-field">Community_name</label>
                	<input class="form-control" type="text" name="community_name" id="community_name-field" value="{{ old('community_name', $letter_proof->community_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="present_address-field">Present_address</label>
                	<input class="form-control" type="text" name="present_address" id="present_address-field" value="{{ old('present_address', $letter_proof->present_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="residence_address-field">Residence_address</label>
                	<input class="form-control" type="text" name="residence_address" id="residence_address-field" value="{{ old('residence_address', $letter_proof->residence_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="use-field">Use</label>
                	<input class="form-control" type="text" name="use" id="use-field" value="{{ old('use', $letter_proof->use ) }}" />
                </div> 
                <div class="form-group">
                	<label for="basis-field">Basis</label>
                	<input class="form-control" type="text" name="basis" id="basis-field" value="{{ old('basis', $letter_proof->basis ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('letter_proofs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li>
                        <a href="{{route('letter_proofs.index')}}">死亡证明</a>
                    </li>
                                        <li class="active">添加证明</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增证明</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                     @include('shared._errors')
                     @if($letter_proof->id)
                        <form class="form-horizontal" action="{{ route('letter_proofs.update', $letter_proof->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                    @else
                        <form class="form-horizontal" role="form" action="{{route('letter_proofs.store')}}" method="post">
                    @endif
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">证明人:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="name" required="" type="text" value="{{old('name',$letter_proof->name)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">社区名称:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="community_name" type="text" value="{{old('community_name',$letter_proof->community_name)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">居住地址:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="present_address" type="text" value="{{old('present_address',$letter_proof->present_address)}}" >
                            </div>
                            
                        </div>
                       <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">户籍地址:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="residence_address" type="text" value="{{old('residence_address',$letter_proof->residence_address)}}" >
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">使用:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="use" type="text" value="{{old('use',$letter_proof->use)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">依据:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="basis" type="text" value="{{old('basis',$letter_proof->basis)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->



@endsection