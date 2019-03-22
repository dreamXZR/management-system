<?php

namespace App\Http\Controllers;

use App\Models\AboveTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboveTableRequest;
use App\Libs\ImageUpload;
use App\Models\Information;

class AboveTablesController extends Controller
{
    

	public function index(Request $request)
	{
		$get_data=$request->all();
		if(array_key_exists('start_time', $get_data) && array_key_exists('end_time', $get_data)){
			$get_data['call_time']=[$get_data['start_time'],$get_data['end_time']];
		}
		$above_tables = AboveTable::filter($get_data)->paginate(10);
		$select=$request->except('page');
		return view('above_tables.index', compact('above_tables','select'));
	}

    public function show(AboveTable $above_table)
    {
        return view('above_tables.show', compact('above_table'));
    }

	public function create(AboveTable $above_table,Request $request)
	{
		$addresses=Information::where('id','>',0)
        			->where('p_id',NULL)
					->defaultOrder()
					->get(['id','present_address','building','door','no']);
		
		$information_id=$request->information_id;
        $information=Information::find($information_id);
        $status='create';
		return view('above_tables.create_and_edit', compact('above_table','addresses','information_id','information','status'));
	}

	public function store(AboveTableRequest $request,ImageUpload $image_upload)
	{
		$post_data=$request->except('images');
		//上传图片
		if($request->images){
			
			$post_data['images']=$image_upload->save($request->images,'above_tables');
		}
		
		//生成编号
		$post_data['number']=create_number();
		$post_data['main']=!empty($post_data['main']) ? implode(',', $post_data['main']) : '';
		$post_data['secondary']=!empty($post_data['secondary']) ? implode(',', $post_data['secondary']) : '';
		$post_data['join']=!empty($post_data['join']) ? implode(',', $post_data['join']) : '';
		$above_table = AboveTable::create($post_data);
		return redirect()->route('above_tables.show', $above_table->id)->with('success', '添加成功');
	}

	public function edit(AboveTable $above_table)
	{
        //$this->authorize('update', $above_table);
       $addresses=Information::where('id','>',0)
        			->where('p_id',NULL)
					->defaultOrder()
					->get(['id','present_address','building','door','no']);
        $status='edit';
		return view('above_tables.create_and_edit', compact('above_table','addresses','status'));
	}

	public function update(AboveTableRequest $request, AboveTable $above_table,ImageUpload $image_upload)
	{
		//$this->authorize('update', $above_table);
		$post_data=$request->except('images');
		//更新图片
		if($request->images){
			
			$post_data['images']=json_merge($image_upload->update($request->images,'above_tables'),$above_table->images);
			
		}
		$post_data['main']=!empty($post_data['main']) ? implode(',', $post_data['main']) : '';
		$post_data['secondary']=!empty($post_data['secondary']) ? implode(',', $post_data['secondary']) : '';
		$post_data['join']=!empty($post_data['join']) ? implode(',', $post_data['join']) : '';
		
		
		$above_table->update($post_data);

		return redirect()->route('above_tables.show', $above_table->id)->with('success', '更新成功');
	}

	public function destroy(AboveTable $above_table)
	{
		$this->authorize('destroy', $above_table);
		$above_table->delete();

		return redirect()->route('above_tables.index')->with('success', '删除成功');
	}

	public function finished(Request $request)
	{
		$above=AboveTable::find($request->id);
		$above->is_finish=$request->is_finish;
		$res=$above->save();
		if($res){
			session()->flash('success','操作成功');
			return response()->json([
				'status'=>true,
			]);
		}else{
			session()->flash('danger','操作失败');
			return response()->json([
				'status'=>true,
			]);
		}
	}
}