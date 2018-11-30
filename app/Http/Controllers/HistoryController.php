<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class HistoryController extends Controller
{
    public function show(Information $information)
    {
    	//残疾信息
        $handicappeds=$information->handicappeds;
        //居民信息
        $residents=$information->residents;
        //所属来电登记
        $register_tables=$information->register_tables()->paginate(10);
        //所属上门登记
        $above_tables=$information->above_tables()->paginate(10);
        //所属问题汇总
        $problem_tables=$information->problem_tables()->paginate(10);

        return view('history.show',compact('information','handicappeds','residents','register_tables','above_tables','problem_tables'));
    }
}
