@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> DrathProof
                    <a class="btn btn-success pull-right" href="{{ route('drath_proofs.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($drath_proofs->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th> <th>Id_number</th> <th>Residence_address</th> <th>Present_address</th> <th>Applicant</th> <th>Death_date</th> <th>Death_address</th> <th>Death_relation</th> <th>Applicant_id_number</th> <th>Agent</th> <th>Application_relation</th> <th>Agent_id_number</th> <th>Other</th> <th>Number</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($drath_proofs as $drath_proof)
                                <tr>
                                    <td class="text-center"><strong>{{$drath_proof->id}}</strong></td>

                                    <td>{{$drath_proof->name}}</td> <td>{{$drath_proof->id_number}}</td> <td>{{$drath_proof->residence_address}}</td> <td>{{$drath_proof->present_address}}</td> <td>{{$drath_proof->applicant}}</td> <td>{{$drath_proof->death_date}}</td> <td>{{$drath_proof->death_address}}</td> <td>{{$drath_proof->death_relation}}</td> <td>{{$drath_proof->applicant_id_number}}</td> <td>{{$drath_proof->agent}}</td> <td>{{$drath_proof->application_relation}}</td> <td>{{$drath_proof->agent_id_number}}</td> <td>{{$drath_proof->other}}</td> <td>{{$drath_proof->number}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('drath_proofs.show', $drath_proof->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('drath_proofs.edit', $drath_proof->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('drath_proofs.destroy', $drath_proof->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $drath_proofs->render() !!}
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
                                        <li class="active">死亡证明</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加证明" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '{{route('drath_proofs.create')}}'"> <i class="fa fa-plus"></i> 添加证明
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <!-- <th class="text-center">ID</th> -->
                                <th class="text-center">姓名</th>
                                <th class="text-center">身份证</th>
                                <th class="text-center">编号</th>
                                <th class="text-center" width="30%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($drath_proofs as $drath_proof)
                            <tr>
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

                                    <form action="{{ route('drath_proofs.destroy', $drath_proof->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
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
                        {!! $drath_proofs->render() !!}
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
<!--Page Related Scripts-->
<script src="{{asset('assets/js/bootbox/bootbox.js')}}"></script>
<script type="text/javascript">
    function data_delete(id)
    {
        bootbox.dialog({
            message: '是否删除',
            title: "提示",
            className: "modal-darkorange",
            buttons: {
                success: {
                    label: "是",
                    className: "btn-blue",
                    callback: function () {
                        event.preventDefault();
                        document.getElementById('id_'+id).submit();
                     }
                },
                "否": {
                    className: "btn-danger",
                    callback: function () { }
                }
            }
        });
    }
    
</script>

@endsection