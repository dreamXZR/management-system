<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Handicapped;

class HandicappedsController extends Controller
{
    public function destroy(Handicapped $handicapped)
    {
    	$res=$handicapped->delete();
    	if($res){
    		return response()->json([
    			'status'=>true,
    			'message'=>'删除成功'
    		]);
    	}
    }
}
