<?php

namespace App\Http\Controllers;

use App\Models\DrathProof;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DrathProofRequest;

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

	public function store(DrathProofRequest $request)
	{
		$post_data=$request->all();
		//number
		$post_data['number']=create_number('drath_proofs');
		$drath_proof = DrathProof::create($post_data);
		return redirect()->route('drath_proofs.index', $drath_proof->id)->with('message', 'Created successfully.');
	}

	public function edit(DrathProof $drath_proof)
	{
        $this->authorize('update', $drath_proof);
		return view('drath_proofs.create_and_edit', compact('drath_proof'));
	}

	public function update(DrathProofRequest $request, DrathProof $drath_proof)
	{
		$this->authorize('update', $drath_proof);
		$drath_proof->update($request->all());

		return redirect()->route('drath_proofs.index', $drath_proof->id)->with('message', 'Updated successfully.');
	}

	public function destroy(DrathProof $drath_proof)
	{
		$this->authorize('destroy', $drath_proof);
		$drath_proof->delete();

		return redirect()->route('drath_proofs.index')->with('message', 'Deleted successfully.');
	}
}