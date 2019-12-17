<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\ImageUpload;

class ImagesController extends Controller
{
	protected $app_url;

	public function __construct()
	{
		$this->app_url=env('APP_URL');
	}

	public function save(Request $request,ImageUpload $imageUpload)
    {
        $folder=$request->folder;
        return $imageUpload->single($request->images,$folder);
    }
    
    public function index(Request $request)
    {
    	$model=$request->model;
    	$model_arr=explode('-', $model);
        $arr=[];
    	if($images=json_decode(\DB::table($model_arr[0])->where('id',$model_arr[1])->first()->images)){
            foreach ($images as $k => $v) {
                if($v){
                    $arr['images'][]="<img src='".$this->app_url."/".$v."' style='height:auto; max-width: 100%; max-height: 100%; margin-top: 0px;'>";
                    $arr['delete'][]=['url'=>route('images.destroy',['model'=>$model]), 'key'=>$k];
                }

            }
        }

    	
    	
    	return response()->json($arr,200);
    }

    public function destroy(Request $request)
    {
    	$model=$request->model;
    	$key=$request->key;
    	$model_arr=explode('-', $model);
    	
    	$images=json_decode(\DB::table($model_arr[0])->where('id',$model_arr[1])->first()->images);
    	
    	del($images[$key]);

        $images[$key]='';
    	//array_splice($images, $key, 1);
    	\DB::table($model_arr[0])->where('id',$model_arr[1])->update(['images'=>json_encode($images)]);
    	return response()->json(['status'=>true],200);
    	
    }
}
