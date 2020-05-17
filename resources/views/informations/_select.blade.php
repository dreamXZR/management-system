<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">数据筛选</h4>
      </div>
      <div class="modal-body">
        <form method="get" action="{{route('informations.index')}}" id="form1">
          <div class="form-group">
            <label for="recipient-name" class="control-label">小区名称:</label>
            <input type="text" class="form-control" name="present_address">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">楼:</label>
            <input type="text" class="form-control" name="building">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">门:</label>
            <input type="text" class="form-control" name="door">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">户:</label>
            <input type="text" class="form-control" name="no">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">房屋使用人:</label>
            <select class="selectpicker form-control" multiple data-live-search="true" name="house_people[]">
              @foreach($information->house_people_map as $k=>$v)
                <option value="{{$k}}">{{$v}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">房屋状态:</label>
            <select class="selectpicker form-control" multiple data-live-search="true" name="house_status[]">
              @foreach($information->house_status_map as $k=>$v)
                <option value="{{$k}}">{{$v}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">住户情况:</label>
            <select class="selectpicker form-control" multiple data-live-search="true" name="people[]">
              @foreach($information->people_map as $k=>$v)
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
<script src="{{asset('assets/js/datetime/moment.min.js')}}"></script>
<script src="{{asset('assets/js/datetime/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('assets/js/datetime/locales/zh-cn.js')}}"></script>
<script type="text/javascript">
  $('.date-picker').datetimepicker({
    locale: moment.locale('zh-cn'),
    format: 'YYYY-MM-DD',

  });
</script>