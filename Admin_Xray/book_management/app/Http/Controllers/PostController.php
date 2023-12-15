<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Seo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('Post.index', ['posts' => $posts]);
    }

    public function add(){
        return view('Post.add');
    }

    public function store(Request $request){
        $input = $request->all();
        $post_item = new Post();
        $post_item->title = $input['post_title'];
        $post_item->slug = $input['post_slug'];
        $post_item->description = $input['post_description'];
        $post_item->image = $input['post_image'];
        $post_item->content = $input['content'];
        $post_item->save();

        $seo_item = new Seo();
        $seo_item->seo_title = $input['seo_title'];
        $seo_item->seo_keywords = $input['seo_keywords'];
        $seo_item->seo_description = $input['seo_description'];
        $seo_item->post_id = $post_item->id;
        $seo_item->save();
        return redirect()->route('post.index');
    }
    public function show($id){
        $item = Post::find($id);
        echo "<pre>";
        print_r($item);
        echo "</pre>";
        exit;
//        return view('Post.index', ["show_post"=>$item]);
    }

    public function edit($id){
        $item = Post::find($id);
        return view('Post.edit', ['post'=> $item]);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $post_item = Post::find($id);
        $post_item->title = $input['post_title'];
        $post_item->slug = $input['post_slug'];
        $post_item->description = $input['post_description'];
        $post_item->image = $input['post_image'];
        $post_item->content = $input['content'];
        $post_item->save();

        $seo_item = Seo::find($id);
        $seo_item->seo_title = $input['seo_title'];
        $seo_item->seo_keywords = $input['seo_keywords'];
        $seo_item->seo_description = $input['seo_description'];
        $seo_item->post_id = $post_item->id;
        $seo_item->save();
        return redirect()->route('post.index');
    }

    public function destroy($id){
        $item = Post::find($id);
        if ($item)
            $item->delete();
        return redirect()->route('post.index');
    }
}
