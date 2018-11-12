<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
	protected $app_url;

	public function __construct()
	{
		$this->app_url=env('APP_URL');
	}
    
    public function index(Request $request)
    {
    	$model=$request->model;
    	$model_arr=explode('-', $model);
        $arr=[];
    	if($images=json_decode(\DB::table($model_arr[0])->where('id',$model_arr[1])->first()->images)){
            foreach ($images as $k => $v) {
                $arr['images'][]="<img src='".$this->app_url."/".$v."' style='height:auto; max-width: 100%; max-height: 100%; margin-top: 0px;'>";
                $arr['delete'][]=['url'=>route('images.destroy',['model'=>$model]), 'key'=>$k];
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
    	

    	array_splice($images, $key, 1);
    	\DB::table($model_arr[0])->where('id',$model_arr[1])->update(['images'=>json_encode($images)]);
    	return response()->json(['status'=>true],200);
    	
    }
}
