<?php

namespace App\Http\Controllers;

use App\Models\DrathProof;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DrathProofRequest;
use App\Libs\ImageUpload;

class DrathProofsController extends Controller
{
    

	public function index(Request $request)
	{
		$drath_proofs = DrathProof::filter($request->all())->paginate(10);
		$select=$request->except('page');
		return view('drath_proofs.index', compact('drath_proofs','select'));
	}

    public function show(DrathProof $drath_proof)
    {
        return view('drath_proofs.show', compact('drath_proof'));
    }

	public function create(DrathProof $drath_proof)
	{
		return view('drath_proofs.create_and_edit', compact('drath_proof'));
	}

	public function store(ImageUpload $image_upload, DrathProofRequest $request)
	{
		
		$post_data=$request->except('images');
        //上传图片
        $post_data['images']=$image_upload->getSaveJson($request->image_path ?? []);
		
		//生成编号
		$post_data['number']=create_number();
		
		$drath_proof = DrathProof::create($post_data);
		return redirect()->route('drath_proofs.show', $drath_proof->id)->with('success', '添加成功');
	}

	public function edit(DrathProof $drath_proof)
	{
        $this->authorize('update', $drath_proof);
		return view('drath_proofs.create_and_edit', compact('drath_proof'));
	}

	
	public function update(ImageUpload $image_upload , DrathProofRequest $request, DrathProof $drath_proof)
	{
		// $this->authorize('update', $drath_proof);
		$post_data=$request->except('images');
        //更新图片
        $post_data['images']=$image_upload->getUpdateJson($request->image_path ?? [],$drath_proof);
		
		$drath_proof->update($post_data);
		
		return redirect()->route('drath_proofs.show', $drath_proof->id)->with('success', '更新成功');
	}

	public function destroy(DrathProof $drath_proof)
	{
		$this->authorize('destroy', $drath_proof);
		$drath_proof->delete();

		return redirect()->route('drath_proofs.index')->with('success', '删除成功');
	}

}