<?php

namespace App\Http\Controllers;

use App\category;
use App\post;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id',auth()->user()->id)->paginate(5);
        $data = [
            'posts' => $posts
        ];

        return view('home', $data);
    }

    public function create()
    {
        $categories = category::all();
        $data = [
            'categories' => $categories
        ];
        return view('create', $data);
    }

    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $detail = $request->input('detail');
        $category_id = $request->input('category_id');
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->status = 0;
        $post->detail = $detail;
        $post->category_id = $category_id;
        $post->save();

        return redirect('/');
    }

    public function delete($id)
    {
        if($id == ""){
            return redirect('/');
        }

        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }

    // public function show($id){}

    // public function create(){}

    // public function update($id){}

}
