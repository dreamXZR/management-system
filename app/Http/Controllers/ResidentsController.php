<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use Excel;
use App\Exports\ResidentsExport;

class ResidentsController extends Controller
{
    public function index(Request $request,Resident $resident)
    {
        $get_data=$request->all();

        if(array_key_exists('time_start', $get_data) && array_key_exists('time_end', $get_data)){
            $get_data['birthday']=[$get_data['time_start'],$get_data['time_end']];
        }
        
        $residents=Resident::with('information')->filter($get_data)->paginate(12);
        $mzs=\DB::table('mz')->where('mz_id','>',0)->get(['mzname','mz_id']);
        $select=$request->except('page');
        return view('residents.index',compact('residents','select','mzs','resident'));
    }
    
    public function destroy(Resident $resident)
    {
    	$res=$resident->delete();
    	if($res){
    		return response()->json([
    			'status'=>true,
    			'message'=>'删除成功'
    		]);
    	}
    }

    public function export(Request $request,ResidentsExport $residentExport)
    {
        return $residentExport->withSelect($request->select);
        //return $export->download('居民信息.xlsx');
    }
}
