@extends('layouts.app')

@section('content')

<div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li class="active">死亡证明</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
{{-- <button type="button" tooltip="添加证明" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '{{route('drath_proofs.create')}}'"> <i class="fa fa-plus"></i> 添加证明
</button> --}}
<button type="button" tooltip="数据筛选" class="btn btn-sm btn-azure btn-addon"  data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-filter"></i> 数据筛选
</button>
<form style="display: inline-block;" method="POST" action="{{route('batch_export')}}" id="export_form">
    {{csrf_field()}}
    <input type="hidden" name="type" value="death_proof">
    <input type="hidden" name="checkID" value="" id="checkID">
    <button type="button" tooltip="导出pdf" class="btn btn-sm btn-azure btn-addon" id="batch_export">  <i class="fa fa-download" ></i> 导出pdf</button>
    
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
                                <th class="text-center">姓名</th>
                                <th class="text-center">身份证</th>
                                <th class="text-center">编号</th>
                                <th class="text-center" width="30%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($drath_proofs as $drath_proof)
                            <tr>
                                <td align="center">
                                    <input type="checkbox" name="check" style="opacity: 1; position: initial;" value="{{$drath_proof->id}}">
                                </td>
                                <td align="center">{{$drath_proof->name}}</td>
                                <td align="center">{{$drath_proof->id_number}}</td>
                                <td align="center">{{$drath_proof->number}}</td>
                                <td align="center">
                                    <a class="btn btn-xs btn-primary" href="{{ route('drath_proofs.show', $drath_proof->id) }}">
                                        <i class="glyphicon glyphicon-eye-open"></i> 
                                    </a>
                                    
                                    <a class="btn btn-xs btn-warning" href="{{ route('drath_proofs.edit', $drath_proof->id) }}">
                                        <i class="glyphicon glyphicon-edit"></i> 
                                    </a>
                                    @can('del_info')
                                    <form action="{{ route('drath_proofs.destroy', $drath_proof->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('是否删除该数据?');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                    </form>
                                    @endcan
                                    <a class="btn btn-xs btn-success" target="_blank" href="{{ route('export', ['type'=>'death_proof','id'=>$drath_proof->id]) }}">
                                        <i class="glyphicon glyphicon-download"></i> 
                                    </a>
                                </td>
                                
                                
                                
                            </tr>
                            @endforeach           
                        </tbody>
                    </table>
                    <div style="margin-top: 20px;">
                        {!! $drath_proofs->appends($select)->render() !!}
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
@include('drath_proofs._select')
<!--Page Related Scripts-->

@endsection

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

    $('#batch_export').click(function(){

        var checkID = [];
        $('input[name="check"]:checked').each(function(i){
             checkID[i] =$(this).val();
        });
        if(checkID.length==0){
            alert('请选择导出信息！');
            return false;
        }
        $('#checkID').val(checkID.join(','));
        $('#export_form').submit();
        
    });
</script>
@endsection