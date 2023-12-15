<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index(){
        $seos = Seo::all();
        return view('Seo.index', ['seos' => $seos]);
    }
}
