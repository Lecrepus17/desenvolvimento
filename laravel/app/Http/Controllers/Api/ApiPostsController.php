<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ApiPostsController extends Controller
{
    public function getAllPost() {
        $post = Post::all();
        // $users = User::withTrashed()->get(); ou $users = User::onlyTrashed()->get();
        dd($post);
        //return response($users, 200);
    }

    public function createPost(Request $request) {
        $post = new Post;
        $post->texto = $request->texto;
        $post->imagem = $request->imagem;
    }

    public function getPost($id) {
        // logic to get a User record goes here
    }

    public function updatePost(Request $request, $id) {
        // logic to update a User record goes here
    }

    public function deletePost($id){

    }
}
