<?php

namespace App\Http\Controllers;

use App\Models\WorkerProof;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkerProofRequest;
use App\Libs\ImageUpload;

class WorkerProofsController extends Controller
{
    

	public function index(Request $request)
	{
		$worker_proofs = WorkerProof::filter($request->all())->paginate(10);
		$select=$request->except('page');
		return view('worker_proofs.index', compact('worker_proofs','select'));
	}

    public function show(WorkerProof $worker_proof)
    {

        return view('worker_proofs.show', compact('worker_proof'));
    }

	public function create(WorkerProof $worker_proof)
	{
		return view('worker_proofs.create_and_edit', compact('worker_proof'));
	}

	public function store(WorkerProofRequest $request,ImageUpload $image_upload)
	{
		$post_data=$request->except('images');

		//上传图片
        $post_data['images']=$image_upload->getSaveJson($request->image_path ?? []);

		//生成编号
		//$post_data['number']=create_number();
		
		$worker_proof = WorkerProof::create($post_data);
		return redirect()->route('worker_proofs.show', $worker_proof->id)->with('success', '添加成功');
	}

	public function edit(WorkerProof $worker_proof)
	{
        //$this->authorize('update', $worker_proof);
		return view('worker_proofs.create_and_edit', compact('worker_proof'));
	}

	public function update(WorkerProofRequest $request, WorkerProof $worker_proof,ImageUpload $image_upload)
	{
		// $this->authorize('update', $worker_proof);
		$post_data=$request->except('images');

		//更新图片
        $post_data['images']=$image_upload->getUpdateJson($request->image_path ?? [],$worker_proof);



		$worker_proof->update($post_data);

		return redirect()->route('worker_proofs.show',$worker_proof->id)->with('success', '更新成功');
	}

	public function destroy(WorkerProof $worker_proof)
	{
		$this->authorize('destroy', $worker_proof);
		$worker_proof->delete();

		return redirect()->route('worker_proofs.index')->with('success', '删除成功');
	}
}