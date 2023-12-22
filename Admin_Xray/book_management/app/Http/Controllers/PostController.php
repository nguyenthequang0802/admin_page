<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Seo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private function fillDataPost($item, $input){
        $item['title'] = $input['post_title'];
        $item['slug'] = $input['post_slug'] ?? Str::slug($item['title']);
        $item['description'] = $input['post_description'];
        $item['image'] = $input['post_image'];
        $item['content'] = $input['content'];
        return $item;
    }
    private function fillDataSeo($item, $input){
        $item['seo_title'] = $input['seo_title'];
        $item['seo_keywords'] = $input['seo_keywords'];
        $item['seo_description'] = $input['seo_description'];
        return $item;
    }
    public function index(){
        $posts = Post::paginate(1);
        return view('Post.index', ['posts' => $posts]);
    }

    public function add(){
        return view('Post.add');
    }

    public function store(Request $request){
        $input = $request->all();
        $post_item = new Post();
//        $post_item->title = $input['post_title'];
//        $post_item->slug = $input['post_slug'];
//        $post_item->description = $input['post_description'];
//        $post_item->image = $input['post_image'];
//        $post_item->content = $input['content'];
        $post_item = $this->fillDataPost($post_item, $input);
        $post_item->save();

        $seo_item = new Seo();
//        $seo_item->seo_title = $input['seo_title'];
//        $seo_item->seo_keywords = $input['seo_keywords'];
//        $seo_item->seo_description = $input['seo_description'];
        $seo_item = $this->fillDataSeo($seo_item, $input);
        $seo_item->post_id = $post_item->id;
        $seo_item->save();
        return redirect()->route('post.index');
    }

    public function edit($id){
        $item = Post::find($id);
        return view('Post.edit', ['post'=> $item]);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $post_item = Post::find($id);
//        $post_item->title = $input['post_title'];
//        $post_item->slug = $input['post_slug'];
//        $post_item->description = $input['post_description'];
//        $post_item->image = $input['post_image'];
//        $post_item->content = $input['content'];
        $post_item = $this->fillDataPost($post_item, $input);
        $post_item->save();

        $seo_item = Seo::find($id);
//        $seo_item->seo_title = $input['seo_title'];
//        $seo_item->seo_keywords = $input['seo_keywords'];
//        $seo_item->seo_description = $input['seo_description'];
        $seo_item = $this->fillDataSeo($seo_item, $input);
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
