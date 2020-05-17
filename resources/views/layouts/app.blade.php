<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ app()->getLocale() }}">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>居委会管理系统</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    


    <!--Basic Styles-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
 



    <!--Beyond styles-->
    <link  href="{{asset('assets/css/beyond.min.css')}}" rel="stylesheet" type="text/css" />
    
    
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{asset('assets/js/skins.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-2.0.3.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-form.js')}}"></script>
    
    <script src="{{asset('assets/js/datetime/locales/bootstrap-datepicker.zh-CN.js')}}"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>

    @include('layouts._header')
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            @include('layouts._left')
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            @yield('content')
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!--Beyond Scripts-->
    <script src="{{asset('assets/js/beyond.min.js')}}"></script>
    

    @include('shared._messages')


    <script type="text/javascript">
        $(document).ready(function(){
            //获取未完成数量
            var register_unfinish_num=<?php
                        $register=new \App\Models\RegisterTable();
                        echo $register->getTotal('register_unfinish_num');
                    ?>;
            var above_unfinish_num=<?php
                $above=new \App\Models\AboveTable();
                echo $above->getTotal('above_unfinish_num');
                ?>;
            var problem_unfinish_num=<?php
                $problem=new \App\Models\ProblemTable();
                echo $problem->getTotal('problem_unfinish_num');
                ?>;
            $('.register_unfinish_num').text(register_unfinish_num);
            $('.above_unfinish_num').text(above_unfinish_num);
            $('.problem_unfinish_num').text(problem_unfinish_num);
        });


        // 初始化多图上传
        function init_multiple(id,initialPreview,initialPreviewConfig,folder)
        {

            $('#'+id).fileinput('destroy');
            $('#'+id).fileinput({
                language: 'zh',
                allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
                uploadAsync: true, //默认异步上传
                showUpload: true, //是否显示上传按钮
                uploadUrl: "{{config('app.url')}}"+"/images_save?folder="+folder,
                maxFileCount: 10,
                initialPreview: initialPreview,
                showType:'detail',
                overwriteInitial: false,
                initialPreviewConfig: initialPreviewConfig,
                showRemove :false,
                showClose:false,
                layoutTemplates:{
                    actionDelete:''
                }

            });
        }
        // 修改初始化多图上传
        function init_multiple_update(id,initialPreview,initialPreviewConfig,folder)
        {

            $('#'+id).fileinput('destroy');
            $('#'+id).fileinput({
                language: 'zh',
                allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
                uploadAsync: true, //默认异步上传
                showUpload: true, //是否显示上传按钮
                uploadUrl: "{{config('app.url')}}"+"/images_save?folder="+folder,
                maxFileCount: 10,
                initialPreview: initialPreview,
                showType:'detail',
                overwriteInitial: false,
                initialPreviewConfig: initialPreviewConfig,
                showRemove :false,
                showClose:false,

            });
        }
        //ajax 获得资源初始化多图
        function get_images(id,url,folder)
        {

            $.ajax({
                type:'GET',
                url:url,
                success:function(res){
                    if(res){

                        init_multiple_update(id,res.images,res.delete,folder);
                    }else{
                        init_multiple_update(id,[],[],folder);
                    }

                }
            })
        }

    </script>
    @yield('afterJavaScript')
</body>
<!--  /Body -->
</html>
