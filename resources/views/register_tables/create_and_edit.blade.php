@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
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
                                        <li class="active">添加</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增登记</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                     @include('shared._errors')
                     @if($register_table->id)
                        <form class="form-horizontal" action="{{ route('register_tables.update', $register_table->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                    @else
                        <form class="form-horizontal" role="form" action="{{route('register_tables.store')}}" method="post" enctype="multipart/form-data">
                    @endif
                        

                        {{ csrf_field() }}
                        @if(!empty($information_id))
                            <input type="hidden" name="information_id" value="{{$information_id}}">
                        @endif
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">来电者姓名:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="name" required="" type="text" value="{{old('name',$register_table->name)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">来电时间:</label>
                            <div class="col-sm-6">
                                <input class="form-control date-picker"  placeholder="" name="call_time" required="" type="text" value="{{old('call_time',$register_table->call_time)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">性别:</label>
                            <div class="col-sm-6">
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" name="sex" @if($register_table->sex==1)checked="checked"@endif value="1">
                                        <span class="text">男</span>
                                    </label>
                                </div>
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" name="sex" @if($register_table->sex==0)checked="checked"@endif value="0">
                                        <span class="text">女</span>
                                    </label>
                                </div>
                                
                             </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">家庭地址:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="address" required="" type="text" value="{{old('address',$register_table->address)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">联系电话:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="phone" required="" type="text" value="{{old('phone',$register_table->phone)}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">来电主要内容:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="call_content" style="height: 100px;">{{old('call_content',$register_table->call_content)}}</textarea>
                                <!-- <input class="form-control"  placeholder="" name="call_content" required="" type="text" value="{{old('call_content',$register_table->call_content)}}"> -->
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">办理结果:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="back_content" style="height: 100px;">{{old('back_content',$register_table->back_content)}}</textarea>
                                <!-- <input class="form-control"  placeholder="" name="back_content" required="" type="text" value="{{old('back_content',$register_table->back_content)}}"> -->
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">备注:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="other"  type="text" value="{{old('other',$register_table->other)}}">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">图片上传:</label>
                            <div class="col-sm-6">
                                <input class="file form-control"  placeholder="" name="images[]"  type="file"  id="img" multiple>
                            </div>
                            
                        </div>
                        <div class="line_01">相关责任人</div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">主要责任:</label>
                            <div class="col-sm-6">
                                <select  class="selectpicker form-control" multiple data-live-search="true" name="main[]">
                                    @foreach($addresses as $address)
                                        <option value="{{$address->id}}" <?php if(in_array($address->id,explode(',', $register_table->main))){echo 'selected';}?>>{{$address->residence_address}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">次要责任:</label>
                            <div class="col-sm-6">
                                <select  class="selectpicker form-control" multiple data-live-search="true" name="secondary[]">
                                    @foreach($addresses as $address)
                                        <option value="{{$address->id}}" <?php if(in_array($address->id,explode(',', $register_table->secondary))){echo 'selected';}?>>{{$address->residence_address}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">参与住户:</label>
                            <div class="col-sm-6">
                                <select  class="selectpicker form-control" multiple data-live-search="true" name="join[]">
                                    @foreach($addresses as $address)
                                        <option value="{{$address->id}}" <?php if(in_array($address->id,explode(',', $register_table->join))){echo 'selected';}?>>{{$address->residence_address}}</option>
                                    @endforeach
                                </select>
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


@endsection
@section('afterJavaScript')
<!--Bootstrap Date Picker-->
<script src="{{asset('assets/js/datetime/moment.min.js')}}"></script>
<script src="{{asset('assets/js/datetime/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript">
    $('.date-picker').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        
    });
</script>

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
    @if($register_table->id)
       get_images('img',"{{route('images.index',['model'=>'register_tables-'.$register_table->id])}}");
    @else
        init_multiple('img',[],[]);
    @endif
</script>

<style type="text/css">
.line_01{
    margin: 50px 0;
    line-height: 1px;
    border-left: 400px solid #ddd;
    border-right: 400px solid #ddd;
    text-align: center;
}
</style>
{{-- select --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/select/bootstrap-select.min.css')}}">
<script src="{{asset('assets/select/bootstrap-select.min.js')}}"></script>
<script type="text/javascript">
    $('.selectpicker').selectpicker({
        'selectedText': 'cat'
    });
</script>
@endsection