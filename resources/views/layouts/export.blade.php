<button class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#export_modal" style="display: none;" id="export_modal_button">
    导出提示模态框
</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="export_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">
                    提示
                </h4>
            </div>

            <div class="modal-body">
                pdf导出中，请勿进行其它操作....
            </div>
            <div class="modal-footer" style="display: none;">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="export_modal_button_close">关闭
                </button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>