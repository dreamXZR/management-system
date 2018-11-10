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
                        <a href="{{route('letter_proofs.index')}}">证明信</a>
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
                        <form class="form-horizontal" action="{{ route('letter_proofs.update', $letter_proof->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                    @else
                        <form class="form-horizontal" role="form" action="{{route('letter_proofs.store')}}" method="post" enctype="multipart/form-data">
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
<script type="text/javascript">
    var images=new Array();
    @if($letter_proof->images)
        var ima_arr={!! $letter_proof->images !!};
        ima_arr.forEach(function(value,index){
            images[images.length] ="<img src='{!! env('APP_URL') !!}/"+value+"' style='max-width:100%;max-height:100%'>";
        })
       
    @endif

    $('#img').fileinput({
        language: 'zh',
        showUpload: false,
        allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
        maxFileCount: 3,
        initialPreview: images,
        showType:'detail',
    })
</script>

@endsection