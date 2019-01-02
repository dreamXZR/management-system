@extends('layouts.app')

@section('content')
<div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li class="active">信息卡列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加证明" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '{{route('informations.create')}}'"> <i class="fa fa-plus"></i> 添加信息
</button>
<button type="button" tooltip="数据筛选" class="btn btn-sm btn-azure btn-addon"  data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-filter"></i> 数据筛选
</button>
<form style="display: inline-block;">
    <input type="hidden" name="data">
    <button type="button" tooltip="导出pdf" class="btn btn-sm btn-azure btn-addon"> <i class="fa fa-download"></i> 导出pdf</button>
</form>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <!-- <th class="text-center">ID</th> -->
                                <th class="text-center" width="7%">
                                    <input type="checkbox" id="allcheck" style="opacity: 1; position: initial;">
                                </th>
                                <th class="text-center">现居住地址</th>
                                <th class="text-center" width="30%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($informations as $info)
                            <tr>
                                <td align="center">
                                    <input type="checkbox" name="check" style="opacity: 1; position: initial;">
                                </td>
                                <td align="center">{{$info->present_address}}小区{{$info->building}}楼{{$info->door}}门{{$info->no}}</td>
                                
                                
                                <td align="center">
                                    <a class="btn btn-xs btn-primary" href="{{route('informations.show',$info->id)}}">
                                        <i class="glyphicon glyphicon-eye-open"></i> 
                                    </a>
                                    
                                    <a class="btn btn-xs btn-warning" href="{{route('informations.edit',$info->id)}}">
                                        <i class="glyphicon glyphicon-edit"></i> 
                                    </a>

                                    <form action="{{route('informations.destroy',$info->id)}}" method="POST" style="display: inline;" onsubmit="return confirm('确定删除此条数据?');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                    </form>
                                    <a class="btn btn-xs btn-success" target="_blank" href="{{ route('export', ['type'=>'information','id'=>$info->id]) }}">
                                        <i class="glyphicon glyphicon-download"></i> 
                                    </a>
                                </td>
                                
                                
                                
                            </tr>
                            @endforeach     
                        </tbody>
                    </table>
                    <div style="margin-top: 20px;">
                       {!! $informations->render() !!}
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
@include('informations._select')
<!--Page Related Scripts-->

@stop

@section('afterJavaScript')
<script type="text/javascript">
    $('#allcheck').click(function(){
        var status=$('#allcheck').prop('checked');
        if(status){
            $('input[name="check"]').prop('checked',true);
        }else{
            $('input[name="check"]').prop('checked',false);
        }
        
    });
</script>
@endsection