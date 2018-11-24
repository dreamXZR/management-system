<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterTable;

class IndexController extends Controller
{
    public function index()
    {
    	return view('index/index');
    }

    public function unfinish(RegisterTable $register)
    {
    	$ids=$register->getUnfinishTables();
    	$register_tables=RegisterTable::whereIn('id',$ids)->paginate(10);
    	return view('index.unfinish',compact('register_tables'));
    }
}
