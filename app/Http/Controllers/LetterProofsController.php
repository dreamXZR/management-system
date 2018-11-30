<?php

namespace App\Http\Controllers;

use App\Models\LetterProof;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LetterProofRequest;
use App\Libs\ImageUpload;
use App\Models\Resident;

class LetterProofsController extends Controller
{
    

	public function index(Request $request)
	{
		$letter_proofs = LetterProof::filter($request->all())->paginate(10);
		$select=$request->except('page');
		return view('letter_proofs.index', compact('letter_proofs','select'));
	}

    public function show(LetterProof $letter_proof)
    {
        return view('letter_proofs.show', compact('letter_proof'));
    }

	public function create(LetterProof $letter_proof,Request $request)
	{
		$resident_id=$request->resident_id;
		$resident=Resident::find($resident_id);
		$information=$resident->information;
		$status='create';
		return view('letter_proofs.create_and_edit', compact('letter_proof','resident','information','status'));
	}

	public function store(LetterProofRequest $request,ImageUpload $imgage_upload)
	{
		$post_data=$request->except('images');
		//上传图片
		if($request->images){
			
			$post_data['images']=$imgage_upload->save($request->images,'letter_proofs');
		}
		
		//生成编号
		$post_data['number']=create_number('letter_proofs');
		
		$letter_proof = LetterProof::create($post_data);
		return redirect()->route('letter_proofs.show', $letter_proof->id)->with('success', '添加成功');
	}

	public function edit(LetterProof $letter_proof)
	{
        // $this->authorize('update', $letter_proof);
        $status='edit';
		return view('letter_proofs.create_and_edit', compact('letter_proof','status'));
	}

	public function update(LetterProofRequest $request, LetterProof $letter_proof,ImageUpload $image_upload)
	{
		// $this->authorize('update', $letter_proof);
		$post_data=$request->except('images');
		//更新图片
		if($request->images){
			
			$post_data['images']=json_merge($image_upload->update($request->images,'letter_proofs'),$letter_proof->images);
		}
		
		$letter_proof->update($post_data);

		return redirect()->route('letter_proofs.show', $letter_proof->id)->with('success', '更新成功');
	}

	public function destroy(LetterProof $letter_proof)
	{
		$this->authorize('destroy', $letter_proof);
		$letter_proof->delete();

		return redirect()->route('letter_proofs.index')->with('success', '删除成功');
	}
}