<?php

namespace App\Http\Controllers;

use App\Models\RegisterTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterTableRequest;
use App\Libs\ImageUpload;

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

	public function create(RegisterTable $register_table)
	{
		return view('register_tables.create_and_edit', compact('register_table'));
	}

	public function store(RegisterTableRequest $request,ImageUpload $image_upload)
	{
		$post_data=$request->except('images');
		//上传图片
		if($request->images){
			
			$post_data['images']=$image_upload->save($request->images,'register_tables');
		}
		
		//生成编号
		$post_data['number']=create_number('register_tables');
		$register_table = RegisterTable::create($post_data);
		return redirect()->route('register_tables.index', $register_table->id)->with('message', 'Created successfully.');
	}

	public function edit(RegisterTable $register_table)
	{
        $this->authorize('update', $register_table);
		return view('register_tables.create_and_edit', compact('register_table'));
	}

	public function update(ImageUpload $image_upload,RegisterTableRequest $request, RegisterTable $register_table)
	{
		//$this->authorize('update', $register_table);
		$post_data=$request->except('images');
		//更新图片
		if($request->images){
			
			$post_data['images']=json_merge($image_upload->update($request->images,'register_tables'),$register_table->images);
			
		}
		$register_table->update($post_data);

		return redirect()->route('register_tables.index', $register_table->id)->with('message', 'Updated successfully.');
	}

	public function destroy(RegisterTable $register_table)
	{
		$this->authorize('destroy', $register_table);
		$register_table->delete();

		return redirect()->route('register_tables.index')->with('message', 'Deleted successfully.');
	}

	public function finished(Request $request)
	{
		$register=RegisterTable::find($request->id);
		$register->is_finish=$request->is_finish;
		$res=$register->save();
		if($res){
			return response()->json([
				'status'=>true,
			]);
		}else{
			return response()->json([
				'status'=>true,
			]);
		}
	}
}