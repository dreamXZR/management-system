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
        $flied = [
            'residents.id',
            'residents.information_id',
            'residents.name',
            'information.present_address',
            'information.building',
            'information.door',
            'information.no',
            'residents.residence_address',
            'information.residence_status',
            'residents.relationship',
            'residents.sex',
            'residents.nation',
            'residents.birthday',
            'residents.culture',
            'residents.face',
            'residents.marriage',
            'residents.identity',
            'residents.id_number',
            'residents.phone',
            'residents.hobby',
            'residents.unit',
            'residents.tag',
            'residents.other',
        ];
        $residents=Resident::with('information')->filter($get_data)->select($flied)
                    
                 ->paginate(40);
        $residents->map(function ($value, $key) {
            $value['name_color'] = \DB::table('colors')->where(['resident_id'=>$value['id'],'column_name'=>'name'])->value('color');
            $value['name_sex'] = \DB::table('colors')->where(['resident_id'=>$value['id'],'column_name'=>'sex'])->value('color');
            $value['name_age'] = \DB::table('colors')->where(['resident_id'=>$value['id'],'column_name'=>'age'])->value('color');
            $value['name_number'] = \DB::table('colors')->where(['resident_id'=>$value['id'],'column_name'=>'number'])->value('color');
            $value['name_address'] = \DB::table('colors')->where(['resident_id'=>$value['id'],'column_name'=>'address'])->value('color');
            return $value;
        });
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
    }

    public function editColor(Request $request)
    {
        $array = explode('_',$request->id);
        if( \DB::table('colors')->where(['resident_id'=>$array[0],'column_name'=>$array[1]])->first()){//如果存在就修改
            \DB::table('colors')
            ->where(['resident_id'=>$array[0],'column_name'=>$array[1]])
            ->update(['color' => $request->color]);
        }else{//保存
            \DB::table('colors')->insert(
                ['resident_id' => $array[0], 'column_name' => $array[1],'color'=>$request->color]
            );
        }

    
       
    }

}
