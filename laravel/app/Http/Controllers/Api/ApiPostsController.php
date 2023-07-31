<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiPostsController extends Controller
{
    public function __construct(
        protected Post $repository,
    ){

    }
    public function getAllPost() {
        $post = Post::all();
        return $post;
        // $users = User::withTrashed()->get(); ou $users = User::onlyTrashed()->get();
        //return response($users, 200);
    }

    public function getPost(string $id) {
        $post = $this->repository->findOrFail($id);

        return new PostResource($post);
    }

    public function createPost(StorePostRequest $request) {
        $data = $request->validated();

        $post = $this->repository->create($data);

        return new PostResource($post);
    }

    //public function updatePost(Request $request, $id) {
        // logic to update a User record goes here
    //}

    public function deletePost(string $id){
        $post = $this->repository->findOrFail($id);
        $post->delete();

        return response($post, 200);
    }
}
