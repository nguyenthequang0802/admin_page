<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add(){
        return view('add_post');
    }

    public function store(Request $request){
        $input = $request->all();
        $item = new Post();
        $item->name = $input['name'];
        $item->content = $input['content'];
        $item->save();
        echo "Success";
    }
    public function show($id){
        $item = Post::find($id);
        return view('detail_post', ['post'=> $item]);
    }

    public function edit($id){
        $item = Post::find($id);
        return view('edit_post', ['post'=> $item]);
    }
}
