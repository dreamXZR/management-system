<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Libs\Catetree;

class TagsController extends Controller
{
    public function index(Catetree $tree)
    {
    	$tags=Tag::all()->toArray();
    	$tags=$tree->catetree($tags);
    	return view('tags.index',compact('tags'));
    }

    public function create(Tag $tag)
    {
    	//$tags=$tag->where('pid',0)->get(['title','id']);
    	return view('tags.create',compact('tags'));
    }

    public function store(Request $request)
    {
    	$post_data=$request->all();
    	Tag::create($post_data);
    	session()->flash('success','添加标签成功');
        return redirect()->route('tags.index');
    }

    public function edit(Tag $tag)
    {
    	//$tags=$tag->where('pid',0)->get(['title','id']);
    	return view('tags.edit',compact(['tag','tags']));
    }

    public function update(Tag $tag, Request $request)
    {
        

        $tag->update([
            //'pid' => $request->pid,
            'title' =>$request->title,
        ]);
        session()->flash('success', '标签更新成功！');
        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        session()->flash('success', '成功删除用户！');
        return back();
    }
}
