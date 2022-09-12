<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $data['posts']=DB::table('posts')->get();
        //dd( $data);
        return view('post/index',$data);
    }
    public function create(){
        return view('post/create');
    }
    public function store(Request $request){
        $data['title']=$request->title;
        $data['details']=$request->details;
        DB::table('posts')->insert($data);
        //dd(DB::table('posts')->get());
        return redirect('posts');
    }
}
