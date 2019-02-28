<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
            $product= \App\product::all();
        return view('welcome',compact('product'));
    }

    public function about (){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
