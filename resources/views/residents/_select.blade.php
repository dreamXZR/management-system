<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">数据筛选</h4>
      </div>
      <div class="modal-body">
        <form method="get" action="{{route('residents.index')}}" id="form1">
          <div class="form-group">
            <label for="recipient-name" class="control-label">姓名:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">身份证:</label>
            <input type="text" class="form-control" name="id_number">
          </div>
          {{-- <div class="form-group">
            <label for="message-text" class="control-label">手机号:</label>
            <input type="text" class="form-control" name="phone">
          </div> --}}
          <div class="form-group">
            <label for="message-text" class="control-label">现居住地:</label>
            <input type="text" class="form-control" name="present_address">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">民族:</label>
            <select class="selectpicker form-control" multiple data-live-search="true" name="nation[]">
              @foreach($mzs as $mz)
              <option value="{{$mz->mzname}}">{{$mz->mzname}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">生日：</label><br/>
            <input type="text" class="form-control date-picker" name="time_start"  data-date-format="yyyy-mm-dd" style="width: 247px;display: inline-block;" readonly=""> ------------<input type="text" class="form-control date-picker" name="time_end"  data-date-format="yyyy-mm-dd" style="width: 247px;display: inline-block;" readonly="">
          </div>
           <div class="form-group">
            <label for="message-text" class="control-label">文化程度:</label>
            <select class="selectpicker form-control" multiple data-live-search="true" name="culture[]">
              @foreach($resident->culture_map as $k=>$v)
              <option value="{{$k}}">{{$v}}</option>
              @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="message-text" class="control-label">政治面貌:</label>
            <select class="selectpicker form-control" multiple data-live-search="true" name="face[]">
              @foreach($resident->face_map as $k=>$v)
              <option value="{{$k}}">{{$v}}</option>
              @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="message-text" class="control-label">婚姻状况:</label>
            <select class="selectpicker form-control" multiple data-live-search="true" name="marriage[]">
              @foreach($resident->marriage_map as $k=>$v)
              <option value="{{$k}}">{{$v}}</option>
              @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="message-text" class="control-label">身份类别:</label>
            <select class="selectpicker form-control" multiple data-live-search="true" name="identity[]">
              @foreach($resident->identity_map as $k=>$v)
              <option value="{{$k}}">{{$v}}</option>
              @endforeach
            </select>
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
{{-- select --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/select/bootstrap-select.min.css')}}">
<script src="{{asset('assets/select/bootstrap-select.min.js')}}"></script>
<script type="text/javascript">
    $('.selectpicker').selectpicker({
        'selectedText': 'cat'
    });
</script>
<!--Bootstrap Date Picker-->
<script src="{{asset('assets/js/datetime/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
    $('.date-picker').datepicker();
</script>