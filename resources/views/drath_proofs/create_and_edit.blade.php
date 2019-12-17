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
                        <a href="{{route('drath_proofs.index')}}">死亡证明</a>
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
                     @if($drath_proof->id)
                        <form class="form-horizontal" action="{{ route('drath_proofs.update', $drath_proof->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                    @else
                        <form class="form-horizontal" role="form" action="{{route('drath_proofs.store')}}" method="post" enctype="multipart/form-data">
                    @endif
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">死者姓名:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="name" required="" type="text" value="{{old('name',$drath_proof->name)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">死者身份证:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="id_number" required="" type="text" value="{{old('id_number',$drath_proof->id_number)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">户籍地址:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="residence_address" required="" type="text" value="{{old('residence_address',$drath_proof->residence_address)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">现住地址:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="present_address" required="" type="text" value="{{old('present_address',$drath_proof->present_address)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">死亡时间:</label>
                            <div class="col-sm-6">
                                <input class="form-control date-picker" id="id-date-picker-1" type="text"   required="" value="{{old('death_date',$drath_proof->death_date)}}" name="death_date">
                                
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">申请人:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="applicant" required="" type="text" value="{{old('applicant',$drath_proof->applicant)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">死亡地点:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="death_address" required="" type="text" value="{{old('death_address',$drath_proof->death_address)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">与死者关系:</label>
                            <div class="col-sm-6">
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" name="death_relation" @if($drath_proof->death_relation==1)checked="checked"@endif value="1">
                                        <span class="text">配偶</span>
                                    </label>
                                </div>
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" name="death_relation" @if($drath_proof->death_relation==2)checked="checked"@endif value="2">
                                        <span class="text">子女</span>
                                    </label>
                                </div>
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" name="death_relation" @if($drath_proof->death_relation==3)checked="checked"@endif value="3">
                                        <span class="text">父母</span>
                                    </label>
                                </div>
                                
                                
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">申请人身份证号:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="applicant_id_number" required="" type="text" value="{{old('applicant_id_number',$drath_proof->applicant_id_number)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">委托代理人:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="agent"  type="text" value="{{old('agent',$drath_proof->agent)}}">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">与申请人关系(请注明):</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="application_relation"  type="text" value="{{old('application_relation',$drath_proof->application_relation)}}">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">委托代理人身份证号:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="agent_id_number"  type="text" value="{{old('agent_id_number',$drath_proof->agent_id_number)}}">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">其他需要说明情况:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="other"  type="text" value="{{old('other',$drath_proof->other)}}">
                            </div>
                            
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
<!--Bootstrap Date Picker-->

<script src="{{asset('assets/js/datetime/moment.min.js')}}"></script>
<script src="{{asset('assets/js/datetime/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('assets/js/datetime/locales/zh-cn.js')}}"></script>

<script type="text/javascript">
     $('.date-picker').datetimepicker({
        locale: moment.locale('zh-cn'),
        format: 'YYYY-MM-DD',
        
    });
</script>

@endsection

{{-- fileput --}}
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
        @if($drath_proof->id)
        get_images('img',"{{route('images.index',['model'=>'drath_proofs-'.$drath_proof->id])}}","death_proofs");
        @else
        init_multiple('img',[],[],"death_proofs");
        @endif
        $('#img').on("fileuploaded",function(event, data, previewId, index){
            var path=data.response.path;
            var html_str='<input name="image_path[]"  type="hidden" value="'+path+'">';
            $("#image_paths").append(html_str);


        });
    </script>
@endsection