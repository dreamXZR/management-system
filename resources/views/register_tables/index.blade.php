@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> RegisterTable
                    <a class="btn btn-success pull-right" href="{{ route('register_tables.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($register_tables->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th> <th>Sex</th> <th>Call_time</th> <th>Address</th> <th>Phone</th> <th>Call_content</th> <th>Back_content</th> <th>Other</th> <th>Number</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($register_tables as $register_table)
                                <tr>
                                    <td class="text-center"><strong>{{$register_table->id}}</strong></td>

                                    <td>{{$register_table->name}}</td> <td>{{$register_table->sex}}</td> <td>{{$register_table->call_time}}</td> <td>{{$register_table->address}}</td> <td>{{$register_table->phone}}</td> <td>{{$register_table->call_content}}</td> <td>{{$register_table->back_content}}</td> <td>{{$register_table->other}}</td> <td>{{$register_table->number}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('register_tables.show', $register_table->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('register_tables.edit', $register_table->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('register_tables.destroy', $register_table->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $register_tables->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div> -->
<div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li class="active">来访登记</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加登记" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '{{route('register_tables.create')}}'"> <i class="fa fa-plus"></i> 添加登记
</button>
<button type="button" tooltip="数据筛选" class="btn btn-sm btn-azure btn-addon"  data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> 数据筛选
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                
                                <th class="text-center">编号</th>
                                <th class="text-center">姓名</th>
                                <th class="text-center">来电时间</th>
                                <th class="text-center">联系电话</th>
                                <th class="text-center">家庭住址</th>
                                <th class="text-center">是否完成</th>
                                <th class="text-center" width="15%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($register_tables as $register_table)
                            <tr>
                                <td align="center">{{$register_table->number}}</td>
                                <td align="center">{{$register_table->name}}</td>
                                <td align="center">{{$register_table->call_time}}</td>
                                <td align="center">{{$register_table->phone}}</td>
                                <td align="center">{{$register_table->address}}</td>
                                <td align="center">
                                    
                                        <label>
                                            <input class="checkbox-slider slider-icon colored-blue" type="checkbox" @if($register_table->is_finish==1)checked=""@endif onclick="is_finish('{{$register_table->id}}')">
                                            <span class="text"></span>
                                        </label>
                                   
                                </td>

                                <td align="center">
                                    <a class="btn btn-xs btn-primary" href="{{ route('register_tables.show', $register_table->id) }}">
                                        <i class="glyphicon glyphicon-eye-open"></i> 
                                    </a>
                                    
                                    <a class="btn btn-xs btn-warning" href="{{ route('register_tables.edit', $register_table->id) }}">
                                        <i class="glyphicon glyphicon-edit"></i> 
                                    </a>

                                    <form action="{{ route('register_tables.destroy', $register_table->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                    </form>
                                </td>
                                
                                
                                
                            </tr>
                            @endforeach           
                        </tbody>
                    </table>
                    <div style="margin-top: 20px;">
                        {!! $register_tables->render() !!}
                    </div>
                    
                </div>
                <div>
                                    </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
@include('letter_proofs._select')
<!--Page Related Scripts-->
<script type="text/javascript">
    function is_finish(id){
        
        console.log(this.checked);
       
    }
</script>

@endsection