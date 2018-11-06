<button type="button" tooltip="新增"  style="display:none;"  data-toggle="modal" data-target="#residentModal" id="bb"></button>
<div class="modal fade" id="residentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">新增信息</h4>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="control-label">姓名:</label>
            <input type="text" class="form-control" v-model='resident.name'>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">与户主关系:</label>
            <input type="text" class="form-control" v-model='resident.relationship'>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">身份证号码:</label>
            <input type="text" class="form-control" v-model='resident.id_number'>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">民族:</label>
            <select class="form-control" v-model='resident.nation'>
              @foreach($mzs as $mz)
              <option value="{{$mz->mzname}}">{{$mz->mzname}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">文化程度:</label>
            <select class="form-control" v-model='resident.culture'>
                <option value="1">小学以下</option>
                <option value="2">小学</option>
                <option value="3">初中</option>
                <option value="4">高中</option>
                <option value="5">大专</option>
                <option value="6">大学</option>
                <option value="7">大学以上</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">政治面貌:</label>
            <select class="form-control" v-model='resident.face'>
                <option value="1">中共党员</option>
                <option value="2">群众</option>
                <option value="3">共青团</option>
                <option value="4">农工党</option>
                <option value="5">其他</option>
                
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">婚姻状况:</label>
            <select class="form-control" v-model='resident.marriage'>
                <option value="1">已婚</option>
                <option value="2">未婚</option>
                <option value="3">离异</option>
                <option value="4">丧偶</option>
                
                
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">身份类别:</label>
            <select class="form-control" v-model='resident.identity'>
                <option value="1">在职</option>
                <option value="2">退休</option>
                <option value="3">学生</option>
                <option value="4">学龄前</option>
                
                
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">有何特长:</label>
            <input type="text" class="form-control" v-model='resident.hobby'>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">工作单位及职务:</label>
            <input type="text" class="form-control" v-model='resident.unit'>
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="bb_close">关闭</button>
          <button v-if="resident_status" type="button" class="btn btn-primary"  @click='add_resident_info'>提交</button>
          <button  v-if="resident_status===false" type="button" class="btn btn-primary"  @click='update_resident_info' >修改</button>
      </div>
    </div>
  </div>
</div>