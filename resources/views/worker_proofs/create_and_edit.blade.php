@extends('layouts.app')

@section('content')

<!-- Page Content -->
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
                     @if($worker_proof->id)
                        <form class="form-horizontal" action="{{ route('worker_proofs.update', $worker_proof->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                    @else
                        <form class="form-horizontal" role="form" action="{{route('worker_proofs.store')}}" method="post" enctype="multipart/form-data">
                    @endif
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">人员姓名:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="name" required="" type="text" value="{{old('name',$worker_proof->name)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">身份证号:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="id_number" type="text" value="{{old('id_number',$worker_proof->id_number)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">现居住地址:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="present_address" type="text" value="{{old('present_address',$worker_proof->present_address)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">联系电话:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="phone" type="text" value="{{old('phone',$worker_proof->phone)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                       <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">灵活就业内容:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="worker_content" type="text" value="{{old('worker_content',$worker_proof->worker_content)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">工作地点:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="worker_place" type="text" value="{{old('worker_place',$worker_proof->worker_place)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        
                        <div></div>
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">随迁子女:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="child_name" type="text" value="{{old('child_name',$worker_proof->child_name)}}" >
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">性别:</label>
                            <div class="col-sm-6">
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" name="child_sex" @if($worker_proof->sex==1)checked="checked"@endif value="1">
                                        <span class="text">男</span>
                                    </label>
                                </div>
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" name="child_sex" @if($worker_proof->death_relation=='0')checked="checked"@endif value="0">
                                        <span class="text">女</span>
                                    </label>
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">身份证号:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="child_id_number" type="text" value="{{old('child_id_number',$worker_proof->child_id_number)}}" >
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">图片上传:</label>
                            <div class="col-sm-6">
                                <input class="file form-control"  placeholder="" name="images[]"  type="file"  id="img" multiple>
                            </div>
                            
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
{{-- fileput --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/fileput/fileinput.min.css')}}">
<script src="{{asset('assets/fileput/fileinput.min.js')}}"></script>
<script src="{{asset('assets/fileput/zh.js')}}"></script>
<script src="{{asset('assets/fileput/slef.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    @if($worker_proof->id)
       get_images('img',"{{route('images.index',['model'=>'worker_proofs-'.$worker_proof->id])}}");
    @else
        init_multiple('img',[],[]);
    @endif
</script>

@endsection