<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Handicapped;
use App\Models\Resident;
use App\Models\Tag;
use Exception;
use DB;

class InformationsController extends Controller
{
    public function index(Request $request)
    {
        $informations=Information::filter($request->all())->paginate(10);
    	return view('informations.index',compact('informations'));
    }

    public function create(Information $information,Resident $resident)
    {
    	$mzs=\DB::table('mz')->where('mz_id','>',0)->get(['mzname','mz_id']);
    	$tags=Tag::all()->pluck('title');
    	return view('informations.create',compact('mzs','information','resident','tags'));
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
        session()->flash('success','添加成功');
        return response()->json([
            'status'=>true,
            'message'=>'添加成功',
            'information_id'=>$information->id,
        ]);
        
    }

    public function edit(Information $information,Resident $resident)
    {
        $mzs=\DB::table('mz')->where('mz_id','>',0)->get(['mzname','mz_id']);
        $id=$information->id;
        $tags=Tag::all()->pluck('title');
        
        return view('informations.edit',compact('mzs','id','information','resident','tags'));
    }

    public function update(Request $request,Information $information)
    {
        //信息卡更新
        $information->update($request->except(['handicappeds','residents']));

        //残疾人士信息更新
        if($handicapped_data=$request->handicappeds){
            foreach ($handicapped_data as $k => $v) {
                if(array_key_exists('id', $v)){
                    $handicapped=Handicapped::find($v['id']);
                    if($handicapped){
                        $handicapped->update($v);
                    }
                    
                }else{
                    $handicapped=new \App\Models\Handicapped($v);
                    $information->handicappeds()->save($handicapped);
                }
                
            }
        }

        //居民信息系更新
        if($resident_data=$request->residents){
            foreach ($resident_data as $k => $v) {
                if(array_key_exists('id', $v)){
                    $resident=Resident::find($v['id']);
                    if($resident){
                        $resident->update($v);
                    }
                }else{
                    $resident=new \App\Models\Resident($v);
                    $information->residents()->save($resident);
                }
                
            }
        }

        session()->flash('success','更新成功');
         return response()->json([
            'status'=>true,
            'message'=>'更新成功',
            'information_id'=>$information->id
        ]);
    }

    
    public function destroy(Information $information)
    {
        $information->delete();

        return redirect()->route('informations.index')->with('success', '删除成功');
    }

    public function show(Information $information)
    {
        //残疾信息
        $handicappeds=$information->handicappeds;
        //居民信息
        $residents=$information->residents;
        //所属来电登记
        $register_tables=$information->register_tables()->paginate(10);
        //所属上门登记
        $above_tables=$information->above_tables()->paginate(10);
        //所属问题汇总
        $problem_tables=$information->problem_tables()->paginate(10);
        //所属历史记录
        $historys=Information::whereIn('id',$information->historyIds($information->id))->paginate(10);
        
        return view('informations.show',compact('information','handicappeds','residents','register_tables','above_tables','problem_tables','historys'));
    }

    
    public function getInformation(Request $request)
    {
        $information=Information::find($request->information_id);
        $residents=$information->residents;
        $handicappeds=$information->handicappeds;

        return response()->json([
            'information'=>$information,
            'residents'=>$residents,
            'handicappeds'=>$handicappeds
        ]);
        
    }

    public function replace_information(Request $request)
    {
        $information_id=$request->information_id;
        
        $new_information_id=$this->replace($information_id);
        if($new_information_id){
            return redirect()->route('informations.show',$new_information_id)->with('success','信息卡替换成功');
        }
        
    }

    
    
    public function replace($information_id)
    {
        DB::beginTransaction();
        if($information=Information::find($information_id)){
            
            $new_information=Information::create([
                'residence_address'=>$information->residence_address
            ]);
            $information->update([
                'p_id'=>$new_information->id,
                'replace_time'=>date('Y-m-d H:i:s',time())
            ]);
            $information->residents()->update([
                'is_replace'=>1
            ]);
            $information->handicappeds()->update([
                'is_replace'=>1
            ]);
            if($new_information && $information){
                DB::commit();
                return $new_information->id;
            }else{
                return false;
            }
        }else{
            throw new Exception("该户信息已不存在");
        }
        
    }

    
}
