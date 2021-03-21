<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   //ログイン前トップ表示
    public function index(){
        return view('index');
    }
    
    //投稿フォーム表示
    public function post(){
        return view('post');
    }
    
    public function ThanksForm(){
        return view('ThanksForm');
    }
    public function create(Request $request){
        $posts =new Post();
        $posts -> title = $request -> title;
        $posts -> place= $request -> place;
        $posts -> star = $request -> star;
        $posts -> memory = $request -> memory;
        $posts -> file = $request -> file;
        $posts -> save();
        return redirect('ThanksForm');
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(Post $post)
    {
        //
    }

   
    public function edit(Post $post)
    {
        //
    }


    public function update(Request $request, Post $post)
    {
        //
    }

    
    public function destroy(Post $post)
    {
        //
    }
}
