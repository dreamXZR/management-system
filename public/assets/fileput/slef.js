
// 初始化多图上传
function init_multiple(id,initialPreview,initialPreviewConfig)
{
    console.log(1111111111111111);
	$('#'+id).fileinput('destroy');
    console.log(2222222222222);
	$('#'+id).fileinput({
        language: 'zh',
        allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
        uploadAsync: true, //默认异步上传
        showUpload: true, //是否显示上传按钮
        uploadLabel: "上传",//设置整体上传按钮的汉字
        showBrowse: true,
        showRemove : false,//显示整体删除的按钮
        maxFileCount: 1,
        initialPreview: initialPreview,
        // showType:'detail',
        overwriteInitial: false,
        initialPreviewConfig: initialPreviewConfig,
        uploadClass: "btn btn-primary",//设置上传按钮样式

    });
}
//ajax 获得资源初始化多图
function get_images(id,url)
{

	$.ajax({
        type:'GET',
        url:url,
        success:function(res){
            if(res){

                init_multiple(id,res.images,res.delete);
            }else{
                init_multiple(id,[],[]);
            }
            
        }
    })
}