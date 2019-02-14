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
            <input type="text" class="form-control"  v-model='resident.name'>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">性别:</label><br/>
            <input type="radio"  v-model='resident.sex' value="男" style="position:initial;display: inline-block;opacity:1;margin-right: 5px;">男&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio"  v-model='resident.sex' value="女" style="position:initial;display: inline-block;opacity:1;margin-right: 5px;">女
            
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">与户主关系:</label><br/>
            {{-- <input type="text" class="form-control" v-model='resident.relationship'> --}}
            @foreach($resident->relationship_map as $ship)
              <input type="radio"  v-model='resident.relationship' value="{{$ship}}" style="position:initial;display: inline-block;opacity:1;margin-right: 5px;" @click="relationship_radio('{{$ship}}')" name="relationship">{{$ship}}&nbsp;&nbsp;&nbsp;&nbsp;
            @endforeach
            <input style="width: 15%; display: inline-block;" type="text" class="form-control" v-model='resident.other_relationship' :disabled="resident.relationship!='其它'">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">户籍所在地:</label>
            <input type="text" class="form-control" v-model='resident.residence_address'>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">身份证号码:</label>
            <input type="text" class="form-control" v-model='resident.id_number'>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">手机号:</label>
            <input type="text" class="form-control" v-model='resident.phone'>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">民族:</label>
            <select class="form-control" v-model='resident.nation'>
              @foreach($mzs as $mz)
              <option value="{{$mz->mzname}}">{{$mz->mzname}}</option>
              @endforeach
            </select>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">文化程度:</label>
            <select class="form-control" v-model='resident.culture'>
                @foreach($resident->culture_map as $culture)
                  <option value="{{$culture}}">{{$culture}}</option>
                @endforeach
            </select>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">政治面貌:</label>
            <select class="form-control" v-model='resident.face'>
                @foreach($resident->face_map as $face)
                  <option value="{{$face}}">{{$face}}</option>
                
                @endforeach
            </select>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">婚姻状况:</label>
            <select class="form-control" v-model='resident.marriage'>
                 @foreach($resident->marriage_map as $marriage)
                    <option value="{{$marriage}}">{{$marriage}}</option>
                
                 @endforeach
                
            </select>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">身份类别:</label>
            <select class="form-control" v-model='resident.identity'>
                @foreach($resident->identity_map as $identity)
                  <option value="{{$identity}}">{{$identity}}</option>
                @endforeach
                
            </select>
            <span class="red">* 必填</span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">有何特长:</label>
            <input type="text" class="form-control" v-model='resident.hobby'>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">工作单位及职务:</label>
            <input type="text" class="form-control" v-model='resident.unit'>
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="control-label">职务标签:</label>
            <select class="form-control" v-model='resident.tag'>
              <option value="无">无</option>
                @foreach($tags as $tag)
                <option value="{{$tag}}">{{$tag}}</option>
                
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">备注:</label>
            <input type="text" class="form-control" v-model='resident.other'>
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