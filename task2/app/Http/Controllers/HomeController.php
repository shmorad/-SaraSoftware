<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::with(['products'])->orderBy('id','desc')->get();
        return view('home',compact('categories'));
    }
    public function products(){
        $tests = Category::with(['products'])->get();
        return view('fontend.product',compact('tests'));
    }
}
