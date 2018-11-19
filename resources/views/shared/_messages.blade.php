<link rel="stylesheet" type="text/css" href="{{asset('assets/toastr/toastr.min.css')}}">
<script src="{{asset('assets/toastr/toastr.min.js')}}"></script>
<script type="text/javascript">
	$(function() {
		//设置显示配置
        var messageOpts = {
              "closeButton" : true,//是否显示关闭按钮
             "debug" : false,//是否使用debug模式
             "positionClass" : "toast-top-right",//弹出窗的位置
             "onclick" : null,
             "showDuration" : "300",//显示的动画时间
             "hideDuration" : "1000",//消失的动画时间
            "timeOut" : "2000",//展现时间
             "extendedTimeOut" : "1000",//加长展示时间
             "showEasing" : "swing",//显示时的动画缓冲方式
             "hideEasing" : "linear",//消失时的动画缓冲方式
             "showMethod" : "fadeIn",//显示时的动画方式
             "hideMethod" : "fadeOut" //消失时的动画方式
         };
         toastr.options = messageOpts;
        
 
         @foreach(['danger', 'warning', 'success', 'info'] as $msg)
         	@if(session()->has($msg)=='success')
         		toastr.success("{{session()->get($msg)}}");
         	@elseif(session()->has($msg)=='warning')
         		toastr.warning("{{session()->get($msg)}}");
         	@elseif(session()->has($msg)=='danger')
         		toastr.danger("{{session()->get($msg)}}");
         	@elseif(session()->has($msg)=='info')
         		toastr.info("{{session()->get($msg)}}");
         	@endif
         @endforeach
         
 
        
	})

</script>