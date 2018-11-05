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
                <option value="小学以下">小学以下</option>
                <option value="小学">小学</option>
                <option value="初中">初中</option>
                <option value="高中">高中</option>
                <option value="大专">大专</option>
                <option value="大学">大学</option>
                <option value="大学以上">大学以上</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">政治面貌:</label>
            <select class="form-control" v-model='resident.face'>
                <option value="中共党员">中共党员</option>
                <option value="群众">群众</option>
                <option value="共青团">共青团</option>
                <option value="农工党">农工党</option>
                <option value="其他">其他</option>
                
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">婚姻状况:</label>
            <select class="form-control" v-model='resident.marriage'>
                <option value="已婚">已婚</option>
                <option value="未婚">未婚</option>
                <option value="离异">离异</option>
                <option value="丧偶">丧偶</option>
                
                
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">身份类别:</label>
            <select class="form-control" v-model='resident.identity'>
                <option value="在职">在职</option>
                <option value="退休">退休</option>
                <option value="学生">学生</option>
                <option value="学龄前">学龄前</option>
                
                
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
          <button  v-if="resident_status===false" type="button" class="btn btn-primary"  @click='update_resident_info'>修改</button>
      </div>
    </div>
  </div>
</div>