<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $posts = Post::get();

        //dd($posts);

        return view('admin.posts.index', compact('posts'));
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(){
        dd('cadastro de um novo post');
    }
}
