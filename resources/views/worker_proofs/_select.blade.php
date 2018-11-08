<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">数据筛选</h4>
      </div>
      <div class="modal-body">
        <form method="get" action="{{route('worker_proofs.index')}}" id="form1">
          <div class="form-group">
            <label for="recipient-name" class="control-label">姓名:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">身份证号:</label>
            <input type="text" class="form-control" name="id_number">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">编号:</label>
            <input type="text" class="form-control" name="number">
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