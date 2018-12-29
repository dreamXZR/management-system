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
                        <a href="{{route('tags.index')}}">标签管理</a>
                    </li>
                                        <li class="active">添加标签</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增标签</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                     @include('shared._errors')
                    <form class="form-horizontal" role="form" action="{{route('tags.store')}}" method="post">
                        {{ csrf_field() }}
                        {{-- <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">上级分类:</label>
                            <div class="col-sm-6">
                            	<select class="form-control" name="pid" required="">
                                    <option value="0">顶级</option>
                            		@foreach($tags as $tag)
                            		<option value='{{$tag->id}}'>{{$tag->title}}</option>
                            		@endforeach
                            	</select>
                      
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div> --}}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">标签名称:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="title" required="" type="text" value="{{old('title')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
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
@stop