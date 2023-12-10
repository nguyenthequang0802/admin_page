<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function media(){
        return view('file-manager');
    }

    public function showBook(){
        $books = Book::all();
//        echo '<pre>';
//        print_r($books->type);
//        echo '</pre>';
//        exit;
        return view('book', ['books'=>$books]);
    }

    public function order(){
        $order = Order::find(1);
        return view('order', ['order'=>$order]);
    }
}
