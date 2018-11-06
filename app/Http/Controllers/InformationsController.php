<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationsController extends Controller
{
    public function index()
    {
        $informations=Information::paginate(10);
    	return view('informations.index',compact('informations'));
    }

    public function create()
    {
    	$mzs=\DB::table('mz')->where('mz_id','>',0)->get(['mzname','mz_id']);
    	
    	return view('informations.create',compact('mzs'));
    }

    public function store(Request $request)
    {
        //信息卡数据
        $information_data=$request->except(['handicappeds','residents']);
        $information=Information::create($information_data);
        

        //居民数据
        if($resident_data=$request->residents){
            foreach ($resident_data as $k => $v) {
                $resident=new \App\Models\Resident($v);
                $information->residents()->save($resident);
                
            }
        }

        

        //残疾人士数据
        if($handicapped_data=$request->handicappeds){
            foreach ($handicapped_data as $k => $v) {

                $handicapped=new \App\Models\Handicapped($v);
                $information->handicappeds()->save($handicapped);
            }
        }

        return response()->json([
            'status'=>true,
            'message'=>'添加成功'
        ]);
        
    }

    public function edit()
    {
        $mzs=\DB::table('mz')->where('mz_id','>',0)->get(['mzname','mz_id']);
        
        return view('informations.edit',compact('mzs'));
    }

    public function update()
    {

    }

    public function destroy(Information $information)
    {
        $information->delete();

        return redirect()->route('informations.index')->with('message', 'Deleted successfully.');
    }

    
}
