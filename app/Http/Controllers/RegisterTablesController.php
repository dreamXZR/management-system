<?php

namespace App\Http\Controllers;

use App\Models\RegisterTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterTableRequest;
use App\Libs\ImageUpload;
use App\Models\Information;

class RegisterTablesController extends Controller
{
    

	public function index(Request $request)
	{
		$get_data=$request->all();
		
		if(array_key_exists('start_time', $get_data) && array_key_exists('end_time', $get_data)){
			$get_data['call_time']=[$get_data['start_time'],$get_data['end_time']];
		}
		
		$register_tables = RegisterTable::filter($get_data)->paginate(10);
		$select=$request->except('page');
		return view('register_tables.index', compact('register_tables','select'));
	}

    public function show(RegisterTable $register_table)
    {
        return view('register_tables.show', compact('register_table'));
    }

	public function create(RegisterTable $register_table,Request $request)
	{

		$addresses=Information::where('id','>',0)
					->where('p_id',NULL)
					->defaultOrder()
					->get(['id','present_address','building','door','no']);
		
		$information_id=$request->information_id;
		$information=Information::find($information_id);
		$status='create';
		return view('register_tables.create_and_edit', compact('register_table','addresses','information_id','information','status'));
	}

	public function store(RegisterTableRequest $request,ImageUpload $image_upload)
	{
		$post_data=$request->except('images');
		//上传图片
		if($request->images){
			
			$post_data['images']=$image_upload->save($request->images,'register_tables');
		}
		
		//生成编号
		$post_data['number']=create_number();
		$post_data['main']=!empty($post_data['main']) ? implode(',', $post_data['main']) : '';
		$post_data['secondary']=!empty($post_data['secondary']) ? implode(',', $post_data['secondary']) : '';
		$post_data['join']=!empty($post_data['join']) ? implode(',', $post_data['join']) : '';
		$register_table = RegisterTable::create($post_data);
		//未完成+1
        $register_table->total_increment();
		return redirect()->route('register_tables.show', $register_table->id)->with('success', '添加成功');
	}

	public function edit(RegisterTable $register_table)
	{
        // $this->authorize('update', $register_table);
        $addresses=Information::where('id','>',0)
        			->where('p_id',NULL)
					->defaultOrder()
					->get(['id','present_address','building','door','no']);
        $status='edit';
		return view('register_tables.create_and_edit', compact('register_table','addresses','status'));
	}

	public function update(ImageUpload $image_upload,RegisterTableRequest $request, RegisterTable $register_table)
	{
		//$this->authorize('update', $register_table);
		$post_data=$request->except('images');
		//更新图片
		if($request->images){
			
			$post_data['images']=json_merge($image_upload->update($request->images,'register_tables'),$register_table->images);
			
		}
		$post_data['main']=!empty($post_data['main']) ? implode(',', $post_data['main']) : '';
		$post_data['secondary']=!empty($post_data['secondary']) ? implode(',', $post_data['secondary']) : '';
		$post_data['join']=!empty($post_data['join']) ? implode(',', $post_data['join']) : '';
		$register_table->update($post_data);

		return redirect()->route('register_tables.show', $register_table->id)->with('success', '更新成功');
	}

	public function destroy(RegisterTable $register_table)
	{
		$this->authorize('destroy', $register_table);
        //未完成-1
        if(!$register_table->is_finish){
            $register_table->total_decrement();
        }

		$register_table->delete();

		return redirect()->route('register_tables.index')->with('success', '删除成功');
	}

	public function finished(Request $request)
	{
		$register=RegisterTable::find($request->id);
		$register->is_finish=$request->is_finish;
		$res=$register->save();
		if($res){
            //未完成总数计算
            $register_table=new RegisterTable;
            if($request->is_finish){
                $register_table->total_decrement();
            }else{
                $register_table->total_increment();
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