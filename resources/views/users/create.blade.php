@extends('layouts.app')
@section('content')
<!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="#">用户管理</a>
                    </li>
                                        <li class="active">添加用户</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增用户</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                     @include('shared._errors')
                    <form class="form-horizontal" role="form" action="{{route('users.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">名称:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="name" required="" type="text" value="{{old('name')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">邮箱账号:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="请输入邮箱" name="email" required="" type="text" value="{{old('email')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">密码:</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="password" required="" type="password" value="{{old('password')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">确认密码:</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="password_confirmation" required="" type="password" value="{{old('password_confirmation')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <!-- <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">用户角色</label>
                            <div class="col-sm-6">
                                <select name="group_id" style="width: 100%;">
                                                                        <option selected="selected" value="8">测试</option>
                                                                    </select>
                            </div>
                        </div> -->  
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
@stop