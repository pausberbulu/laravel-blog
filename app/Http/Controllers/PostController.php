<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function store(Request $request){
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|min:8',
        ]);
        Post::create($validator);
    }
    
}
