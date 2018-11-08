<?php

namespace App\Http\Controllers;

use App\Models\LetterProof;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LetterProofRequest;

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

	public function create(LetterProof $letter_proof)
	{
		return view('letter_proofs.create_and_edit', compact('letter_proof'));
	}

	public function store(LetterProofRequest $request)
	{
		$post_data=$request->all();
		//number
		$post_data['number']=create_number('letter_proofs');
		
		$letter_proof = LetterProof::create($post_data);
		return redirect()->route('letter_proofs.index', $letter_proof->id)->with('message', 'Created successfully.');
	}

	public function edit(LetterProof $letter_proof)
	{
        $this->authorize('update', $letter_proof);
		return view('letter_proofs.create_and_edit', compact('letter_proof'));
	}

	public function update(LetterProofRequest $request, LetterProof $letter_proof)
	{
		$this->authorize('update', $letter_proof);
		$letter_proof->update($request->all());

		return redirect()->route('letter_proofs.index', $letter_proof->id)->with('message', 'Updated successfully.');
	}

	public function destroy(LetterProof $letter_proof)
	{
		$this->authorize('destroy', $letter_proof);
		$letter_proof->delete();

		return redirect()->route('letter_proofs.index')->with('message', 'Deleted successfully.');
	}
}