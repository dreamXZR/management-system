<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationsController extends Controller
{
    public function index()
    {

    	return view('informations.index');
    }

    public function create()
    {
    	$mzs=\DB::table('mz')->where('mz_id','>',0)->get(['mzname','mz_id']);
    	
    	return view('informations.create',compact('mzs'));
    }
}
