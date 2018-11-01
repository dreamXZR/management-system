<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest',[
    //         'only' => ['create']
    //     ]);
    // }
    
    public function create()
    {
    	return view('sessions.create');
    }

    public function store(Request $request)
    {
    	$credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);
    	if (Auth::attempt($credentials)) {
    		return redirect()->route('index');
    	}else{
    		session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
    		return redirect()->back();
    	}
    }

    public function destroy()
    {
    	 Auth::logout();
    	 return redirect()->route('login');
    }
}
