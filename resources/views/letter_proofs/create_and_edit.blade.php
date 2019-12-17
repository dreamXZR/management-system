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
                                @if($status=='create')
                                <input class="form-control"  placeholder="" name="name" required="" type="text" value="@if($length==1){{$resident->name}}@else{{$resident}}@endif" readonly>
                                @else
                                <input class="form-control"  placeholder="" name="name" required="" type="text" value="{{old('name',$letter_proof->name)}}">
                                @endif
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
                                @if($status=='create')
                                 <input class="form-control"  placeholder="" name="present_address" type="text" value="{{$information->present_address}}庭苑{{$information->building}}-{{$information->door}}-{{$information->no}}" readonly>
                                @else
                                <input class="form-control"  placeholder="" name="present_address" type="text" value="{{old('present_address',$letter_proof->present_address)}}" required="">
                                @endif
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                       <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">户籍地址:</label>
                            <div class="col-sm-6">
                                @if($status=='create')
                                <input class="form-control"  placeholder="" name="residence_address" type="text" value="@if($length==1){{$resident->residence_address}}@else{{''}}@endif">
                                @else
                                <input class="form-control"  placeholder="" name="residence_address" type="text" value="{{old('residence_address',$letter_proof->residence_address)}}" required="">
                                @endif
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
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
                            <label for="username" class="col-sm-2 control-label no-padding-right">抬头:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="self" type="text" value="{{old('self',$letter_proof->self)}}" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">图片上传:</label>
                            <div class="col-sm-6">
                                <input class="file form-control"  placeholder="" name="images"  type="file"  id="img" multiple>
                            </div>
                            
                        </div>
                        <div class="form-group">

                            <div class="col-sm-6" id="image_paths">
                                {{--<input name="image_path[]"  type="hidden" >--}}
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-lg btn-primary">保存信息</button>
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

@endsection

@section('afterJavaScript')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fileput/fileinput.min.css')}}">
    <script src="{{asset('assets/fileput/fileinput.min.js')}}"></script>
    <script src="{{asset('assets/fileput/zh.js')}}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        @if($letter_proof->id)
        get_images('img',"{{route('images.index',['model'=>'letter_proofs-'.$letter_proof->id])}}",'letter_proofs');
        @else
        init_multiple('img',[],[],'letter_proofs');
        @endif
        $('#img').on("fileuploaded",function(event, data, previewId, index){
            var path=data.response.path;
            var html_str='<input name="image_path[]"  type="hidden" value="'+path+'">';
            $("#image_paths").append(html_str);


        });
    </script>
@endsection