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
    <title>物业管理系统</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    


    <!--Basic Styles-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
 



    <!--Beyond styles-->
    <link  href="{{asset('assets/css/beyond.min.css')}}" rel="stylesheet" type="text/css" />
    
    
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{asset('assets/js/skins.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-2.0.3.min.js')}}"></script>
    

</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <!-- <div class="loading-container">
        <div class="loading-progress">
            <div class="rotator">
                <div class="rotator">
                    <div class="rotator colored">
                        <div class="rotator">
                            <div class="rotator colored">
                                <div class="rotator colored"></div>
                                <div class="rotator"></div>
                            </div>
                            <div class="rotator colored"></div>
                        </div>
                        <div class="rotator"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
    </div> -->
    <!--  /Loading Container -->
    <!-- Navbar -->
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

    <!--Page Related Scripts-->
    <!--Sparkline Charts Needed Scripts-->
   <!--  <script src="assets/js/charts/sparkline/jquery.sparkline.js"></script>
    <script src="assets/js/charts/sparkline/sparkline-init.js"></script>
 -->
    <!--Easy Pie Charts Needed Scripts-->
   <!--  <script src="assets/js/charts/easypiechart/jquery.easypiechart.js"></script>
    <script src="assets/js/charts/easypiechart/easypiechart-init.js"></script>
 -->
    <!--Flot Charts Needed Scripts-->
    <!-- <script src="assets/js/charts/flot/jquery.flot.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.resize.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.pie.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.tooltip.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.orderBars.js"></script>
 -->

</body>
<!--  /Body -->
</html>
