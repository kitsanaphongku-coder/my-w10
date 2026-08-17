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
}