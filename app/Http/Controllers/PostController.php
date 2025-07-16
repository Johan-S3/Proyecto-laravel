<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        // dd($posts);
        return Inertia::render('Posts/Listar', ["data" => $posts]);
        // return view("posts.index", compact('posts'));
    }

    public function create(){
        return view("posts.create");
    }

    public function store(StorePostRequest $request){

        // dd($request->file('file'));
        $imagePath = Storage::disk('public')->putFile('posts', $request->file('file'));
        $request['user_id'] = 2;
        $post = Post::create($request->all());

        if ($imagePath) { 
            $post->image()->create([ 
                'path' => $imagePath,
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);
        }
        // dd($post);
    }
}
