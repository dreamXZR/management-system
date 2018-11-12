
// 初始化多图上传
function init_multiple(id,initialPreview,initialPreviewConfig)
{
	$('#'+id).fileinput('destroy');
	$('#'+id).fileinput({
        language: 'zh',
        showUpload: false,
        allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
        maxFileCount: 3,
        initialPreview: initialPreview,
        showType:'detail',
        overwriteInitial: false,
        initialPreviewConfig: initialPreviewConfig,
        
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