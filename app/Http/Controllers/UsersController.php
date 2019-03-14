<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RegisterTable;
use Illuminate\Support\Facades\Cache;

class UsersController extends Controller
{

    
    

    public function create()
    {
        
    	return view('users.create');
    }

    public function index()
    {
        $users=User::paginate(10);
    	return view('users.index',compact('users'));
    }

    public function show(User $user)
    {
    	return view('users.show',compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6',
            'role'=>'required'
        ]);
       
        $user=User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
        
        $user->assignRole($request->role);    //添加权限
        session()->flash('success','添加人员成功');
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(User $user, Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|max:50',
        //     'password' => 'required|confirmed|min:6'
        // ]);

        $user->update([
            'name' => $request->name,
            // 'password' => bcrypt($request->password),
        ]);
        //修改权限
        \DB::table('model_has_roles')->where('model_id',$user->id)->delete();
        $user->assignRole($request->role);
        
        session()->flash('success', '个人资料更新成功！');
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', '成功删除用户！');
        return back();
    }

    protected $day=10;
    
    public function test()
    {
        // $start_time=date('Y-m-d H:i:s',strtotime('- '.$this->day.' day'));
        // $end_time=date('Y-m-d H:i:s',strtotime('+ '.$this->day.' day'));
        // $registers=RegisterTable::where('is_finish',0)->whereBetween('created_at',[$start_time,$end_time])->pluck('id')->toArray();
        // $num=count($registers);
        // var_dump($registers);
        // var_dump($num);
        //Cache::set('',111);
        Cache::pull('unfinsish_num',0);
        //echo
    }

}
