
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">数据筛选</h4>
      </div>
      <div class="modal-body">
        <form method="get" action="{{route('register_tables.index')}}" id="form1">
          <div class="form-group">
            <label for="message-text" class="control-label">编号:</label>
            <input type="text" class="form-control" name="number">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">姓名:</label>
            <input type="text" class="form-control" name="name">
          </div>
         
          <div class="form-group">
            <label for="recipient-name" class="control-label">联系电话:</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">家庭住址:</label>
            <input type="text" class="form-control" name="address">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="control-label"></label><br/>
            开始时间：<input type="text" class="form-control" name="start_time" id='start_time' style="width: 214px;display: inline-block;"> 结束时间：<input type="text" class="form-control" name="end_time" id='end_time' style="width: 215px;display: inline-block;">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('form1').submit();">提交</button>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
<script src="{{asset('assets/js/datetime/moment.min.js')}}"></script>
<script src="{{asset('assets/js/datetime/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript">
    $('#start_time').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        
    });
    $('#end_time').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',

    });
</script>
