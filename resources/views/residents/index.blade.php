@extends('layouts.app')

@section('content')
<div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li class="active">人员列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="数据筛选" class="btn btn-sm btn-azure btn-addon"  data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> 数据筛选
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="table-scrollable">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">
                                    现居住地
                                </th>
                                <th scope="col">
                                    户籍所在地
                                </th>
                                <th scope="col">
                                    户籍性质
                                </th>
                                <th scope="col">
                                    房屋状态
                                </th>
                                <th scope="col">
                                    房屋使用人
                                </th>
                                <th scope="col">
                                    住户情况
                                </th>
                                <th scope="col">
                                    姓名
                                </th>
                                <th scope="col">
                                    与户主关系
                                </th>
                                <th scope="col">
                                    性别
                                </th>
                                <th scope="col">
                                    民族
                                </th>
                                <th scope="col">
                                    出生年月
                                </th>
                                <th scope="col">
                                    文化程度
                                </th>
                                <th scope="col">
                                    政治面貌
                                </th>
                                <th scope="col">
                                    婚姻状况
                                </th>
                                <th scope="col">
                                    身份类别
                                </th>
                                <th scope="col">
                                    有何特长
                                </th>
                                <th scope="col">
                                    身份证号码
                                </th>
                                <th scope="col">
                                    工作单位及职务
                                </th>
                                <th scope="col">
                                    联系电话
                                </th>
                                <th scope="col">
                                    职位标签
                                </th>
                                <th scope="col">
                                    备注
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($residents as $resident)
                            <tr>
                                <td>
                                    {{$resident->information->present_address}}
                                </td>
                                <td>
                                    {{$resident->information->residence_address}}
                                </td>
                                <td>
                                    {{$resident->information->residence_status}}
                                </td>
                                <td>
                                    {{$resident->information->type2}}
                                </td>
                                <td>
                                    {{$resident->information->type1}}
                                </td>
                                <td>
                                    {{$resident->information->type3}}
                                </td>
                                <td>
                                   {{$resident->name}}
                                </td>
                                <td>
                                    {{$resident->relationship}}
                                </td>
                                <td>
                                    {{$resident->sex}}
                                </td>
                                <td>
                                    {{$resident->nation}}
                                </td>
                                <td>
                                    {{$resident->birthday}}
                                </td>
                                <td>
                                    {{$resident->culture}}
                                </td>
                                <td>
                                    {{$resident->face}}
                                </td>
                                <td>
                                    {{$resident->marriage}}
                                </td>
                                <td>
                                    {{$resident->identity}}
                                </td>
                                <td>
                                    {{$resident->hobby}}
                                </td>
                                <td>
                                	{{$resident->id_number}}
                                </td>
                                <td>
                                	{{$resident->unit}}
                                </td>
                                 <td>
                                	{{$resident->phone}}
                                </td>
                                <td>
                                	{{$resident->tag}}
                                </td>
                                <td>
                                	{{$resident->other}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
