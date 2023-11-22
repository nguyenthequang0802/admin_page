<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('category_parent_id', '=',  0)->with('childs')->paginate(5);
        return view('admin.content.category.index', ['categories'=>$categories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::where('category_parent_id', '=', 0)->with('childs')->get();
        return view('admin.content.category.add', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $category = new Category();
        $category['category_name'] = $input['categoryName'];
        $category['category_parent_id'] = $input['categoryParentId'];
        $category['category_slug'] = $input['categorySlug'];
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categories = Category::where('category_parent_id', '=', 0)->with('childs')->get();
        $item = Category::find($id);
        return view('admin.content.category.edit', ['categories'=>$categories, 'item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $category = Category::find($id);
        $category['category_name'] = $input['categoryName'];
        $category['category_parent_id'] = $input['categoryParentId'];
        $category['category_slug'] = $input['categorySlug'];
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteChilds($id){
        $item = Category::find($id);
        if ($item){
            if ($item->childs){
                foreach ($item->childs as $child){
                    $this->deleteChilds($child->id);
                }
            }
            $item->delete();
        }
    }

    public function destroy(string $id)
    {
        $this->deleteChilds($id);
        return redirect()->route('admin.category.index');
    }
}
