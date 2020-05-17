<?php

namespace App\Http\Controllers;

use App\Models\ProblemTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProblemTableRequest;
use App\Libs\ImageUpload;
use App\Models\Information;

class ProblemTablesController extends Controller
{
    

	public function index(Request $request)
	{
		$get_data=$request->all();
		
		if(array_key_exists('start_time', $get_data) && array_key_exists('end_time', $get_data)){
			$get_data['call_time']=[$get_data['start_time'],$get_data['end_time']];
		}
		$problem_tables = ProblemTable::filter($get_data)->paginate(10);
		$select=$request->except('page');
		return view('problem_tables.index', compact('problem_tables','select'));
	}

    public function show(ProblemTable $problem_table)
    {
        return view('problem_tables.show', compact('problem_table'));
    }

	public function create(ProblemTable $problem_table,Request $request)
	{
        $addresses=get_addresses();
		
		$information_id=$request->information_id;
        $information=Information::find($information_id);
        $status='create';
		return view('problem_tables.create_and_edit', compact('problem_table','addresses','information_id','information','status'));
	}

	public function store(ProblemTableRequest $request,ImageUpload $image_upload)
	{
		$post_data=$request->except('images');
        //上传图片
        $post_data['images']=$image_upload->getSaveJson($request->image_path ?? []);
		
		$post_data['main']=!empty($post_data['main']) ? implode(',', $post_data['main']) : '';
		$post_data['secondary']=!empty($post_data['secondary']) ? implode(',', $post_data['secondary']) : '';
		$post_data['join']=!empty($post_data['join']) ? implode(',', $post_data['join']) : '';
		$problem_table = ProblemTable::create($post_data);
        //未完成+1
        $problem_table->total_increment('problem_unfinish_num');
		return redirect()->route('problem_tables.show', $problem_table->id)->with('success', '添加成功');
	}

	public function edit(ProblemTable $problem_table)
	{
        //$this->authorize('update', $problem_table);
        $addresses=get_addresses();
        $status='edit';
		return view('problem_tables.create_and_edit', compact('problem_table','addresses','status'));
	}

	public function update(ProblemTableRequest $request, ProblemTable $problem_table,ImageUpload $image_upload)
	{
		//$this->authorize('update', $problem_table);
		$post_data=$request->except('images');
        //更新图片
        $post_data['images']=$image_upload->getUpdateJson($request->image_path ?? [],$problem_table);

        $post_data['main']=!empty($post_data['main']) ? implode(',', $post_data['main']) : '';
		$post_data['secondary']=!empty($post_data['secondary']) ? implode(',', $post_data['secondary']) : '';
		$post_data['join']=!empty($post_data['join']) ? implode(',', $post_data['join']) : '';
		$problem_table->update($post_data);

		return redirect()->route('problem_tables.show', $problem_table->id)->with('message', 'Updated successfully.');
	}

	public function destroy(ProblemTable $problem_table)
	{
		$this->authorize('destroy', $problem_table);
        //未完成-1
        if(!$problem_table->is_finish){
            $problem_table->total_decrement('problem_unfinish_num');
        }
		$problem_table->delete();

		return redirect()->route('problem_tables.index')->with('success', '删除成功');
	}

	public function finished(Request $request)
	{
		$problem=ProblemTable::find($request->id);
		$problem->is_finish=$request->is_finish;
		$res=$problem->save();
        if($res){
            //未完成总数计算
            $problem_table=new ProblemTable;
            if($request->is_finish){
                $problem_table->total_decrement('problem_unfinish_num');
            }else{
                $problem_table->total_increment('problem_unfinish_num');
            }

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