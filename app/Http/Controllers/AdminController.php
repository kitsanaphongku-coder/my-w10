<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function blogs(){
         $blogs = DB::table('blogs')->get();

    return view("blogs", compact("blogs"));
    }
    function abouts(){
       
        $name = "Kitsanaphong";
        $date = "6 กรกฎาคม 2026";
        return view("abouts",compact('name','date'));
    }

    function create()
    {
        return view("form");
    }
    function insert(Request $request){
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ],[
            'title.required'=>'กรุณากรอกชื่อบทความ',
            'title.max'=>'กรุณากรอกชื่อบทความไม่เกิน50ตัวอักษร',
            'content.required'=>'กรุณากรอกเนื้อหาบทความ',
        ]);
        $data=[
            'title'=>$request->title,
            'content'=>$request->content,
            
        ];
    
        DB::table('blogs')->insert($data);
        return redirect()->route('blogs');
    }

    function delete($id) {
        (DB::table('blogs')->where('id',$id)->delete());
        return redirect()->route('blogs');
}
function change($id){
    $blog = DB::table("blogs")->where('id', $id)->first();
$data = [
    'status' => !$blog->status
];
    DB::table("blogs")->where('id', $id)->update($data);
return redirect('/blogs');   
}

function edit($id){
    $blog = DB::table("blogs")->where('id', $id)->first();
    return view('edit', compact('blog'));
}
function update(Request $request,$id)
{
    $request->validate([
        'title' => 'required|max:50',
        'content' => 'required',
    ], [
        'title.required' => 'กรุณาใส่ชื่อบทความ',
        'title.max' => 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
        'content.required' => 'กรุณาใส่เนื้อหา',
    ]);
    $data = [
        'title' => $request->title,
        'content' => $request->content,
    ];
    DB::table("blogs")->where('id', $id)->update($data);
    return redirect('/blogs');
}
}