<?php

namespace App\Http\Controllers;

use App\Models\RegisterTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterTableRequest;

class RegisterTablesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$register_tables = RegisterTable::orderBy('number','desc')->paginate(10);
		return view('register_tables.index', compact('register_tables'));
	}

    public function show(RegisterTable $register_table)
    {
        return view('register_tables.show', compact('register_table'));
    }

	public function create(RegisterTable $register_table)
	{
		return view('register_tables.create_and_edit', compact('register_table'));
	}

	public function store(RegisterTableRequest $request)
	{
		$register_table = RegisterTable::create($request->all());
		return redirect()->route('register_tables.index', $register_table->id)->with('message', 'Created successfully.');
	}

	public function edit(RegisterTable $register_table)
	{
        $this->authorize('update', $register_table);
		return view('register_tables.create_and_edit', compact('register_table'));
	}

	public function update(RegisterTableRequest $request, RegisterTable $register_table)
	{
		$this->authorize('update', $register_table);
		$register_table->update($request->all());

		return redirect()->route('register_tables.index', $register_table->id)->with('message', 'Updated successfully.');
	}

	public function destroy(RegisterTable $register_table)
	{
		$this->authorize('destroy', $register_table);
		$register_table->delete();

		return redirect()->route('register_tables.index')->with('message', 'Deleted successfully.');
	}
}