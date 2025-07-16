<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function getNameById($id){
        $users = User::find($id);
        return $users;
        // dd($posts);
        // return Inertia::render('Posts/Listar', ["data" => $posts]);
        // return view("posts.index", compact('posts'));
    }
}
