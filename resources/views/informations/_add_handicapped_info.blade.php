 <button type="button" tooltip="新增"  style="display:none;"  data-toggle="modal" data-target="#handicappedModal" id="aa"></button>
<div class="modal fade" id="handicappedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">新增信息</h4>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="control-label">残疾人姓名:</label>
            <input type="text" class="form-control" v-model='handicapped.name'>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">残疾人证号:</label>
            <input type="text" class="form-control" v-model='handicapped.number'>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">残疾类别:</label>
            <input type="text" class="form-control" v-model='handicapped.type'>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">残疾等级:</label>
            <input type="text" class="form-control" v-model='handicapped.level'>
          </div>
          
        
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="aa_close">关闭</button>
          <button v-if="handicapped_status" type="button" class="btn btn-primary"  @click='add_handicapped_info'>提交</button>
          <button  v-if="handicapped_status===false" type="button" class="btn btn-primary"  @click='update_handicapped_info'>修改</button>
      </div>
    </div>
  </div>
</div>