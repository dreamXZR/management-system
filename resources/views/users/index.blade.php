@extends('layouts.app')
@section('content')
	<div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li class="active">用户管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '{{route('users.create')}}'"> <i class="fa fa-plus"></i> 添加用户
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">用户名称</th>
                                <th class="text-center">邮箱</th>
                                <th class="text-center" width="30%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($users as $user)
                            <tr>
                                <td align="center">{{$user->id}}</td>
                                <td align="center">{{$user->name}}</td>
                                <td align="center">{{$user->email}}</td>
                                <td align="center">
                                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onclick="user_delete('{{$user->id}}')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                    <form id="user_id_{{$user->id}}" action="{{ route('users.destroy', $user->id) }}" method="post" style="display: none;">
        								{{ csrf_field() }}
        								{{ method_field('DELETE') }}
        
      								</form>
                                </td>
                            </tr>
                            @endforeach                        
                        </tbody>
                    </table>
                    <div style="margin-top: 20px;">
                    	{!! $users->render() !!}
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
	function user_delete(user_id)
	{
		bootbox.dialog({
            message: '是否删除该用户',
            title: "提示",
            className: "modal-darkorange",
            buttons: {
                success: {
                    label: "是",
                    className: "btn-blue",
                    callback: function () {
                    	event.preventDefault();
                    	document.getElementById('user_id_'+user_id).submit();
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
@stop