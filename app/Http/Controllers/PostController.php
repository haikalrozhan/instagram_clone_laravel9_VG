<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'caption' => 'required',
            'image' => 'required | image'
        ]);

        auth()->user()->posts()->create($validatedData);

        dd($this->request('image'));

        Post::create([
            $validatedData
        ]);

        dd($request->all());
    }
}
 
