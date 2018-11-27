@extends('layouts.app')
@section('content')
	<div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li class="active">标签管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加标签" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '{{route('tags.create')}}'"> <i class="fa fa-plus"></i> 添加标签
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
                                <th class="text-center">标签名称</th>
                                <th class="text-center" width="30%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($tags as $tag)
                            <tr>
                                <!-- <td align="center">{{$tag['id']}}</td> -->
                                <td align="center"><?php echo str_repeat('--',$tag['level']*4)?>{{$tag['title']}}</td>
                               	
                                <td align="center">
                                	<a class="btn btn-xs btn-warning" href="{{route('tags.edit',$tag['id'])}}">
                                        <i class="glyphicon glyphicon-edit"></i> 
                                    </a>
                                    @can('del_info')
                                    <form action="{{ route('tags.destroy', $tag['id']) }}" method="POST" style="display: inline;" onsubmit="return confirm('是否删除该数据?');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                    </form>
                                     @endcan
                                    
      								
                                </td>
                                
                            </tr>
                            @endforeach           
                        </tbody>
                    </table>
                    <div style="margin-top: 20px;">
                    	
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
{{-- <script src="{{asset('assets/js/bootbox/bootbox.js')}}"></script>
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
	
</script> --}}
@stop