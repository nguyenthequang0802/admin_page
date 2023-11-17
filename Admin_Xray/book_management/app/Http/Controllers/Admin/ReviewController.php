<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews =  Review::all()->sortByDesc('id');
        return view('admin.content.review.index', ['reviews'=>$reviews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reviews = Review::all()->sortByDesc('id');
        return view('admin.content.review.add', ['reviews'=>$reviews]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $review = new Review();
        $review['category_id'] = $input['categoryId'];
        $review['name'] = $input['reviewName'];
        $review['preview_image'] = $input['reviewImage'];
        $review['description'] = $input['reviewDescription'];
        $review['content'] = $input['reviewContent'];
        $review['user_id'] = $input['userId'];
        $review->save();
        return redirect()->route('admin.review.index');
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
        $reviews = Review::all()->sortByDesc('id');
        $item = Review::find($id);
        return view('admin.content.review.edit', ['reviews'=>$reviews, 'item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $item = Review::find($id);
        $item['category_id'] = $input['categoryId'];
        $item['name'] = $input['reviewName'];
        $item['preview_image'] = $input['reviewImage'];
        $item['description'] = $input['reviewDescription'];
        $item['content'] = $input['reviewContent'];
        $item['user_id'] = $input['userId'];
        $item->save();
        return redirect()->route('admin.review.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect()->route('admin.review.index');
    }
}
