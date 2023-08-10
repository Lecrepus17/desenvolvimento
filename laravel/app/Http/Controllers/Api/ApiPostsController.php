<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class ApiPostsController extends Controller
{
    public function __construct(
        protected Post $repository,
    ){

    }
    public function getAllPostIfSeguir(){
        $follower = Auth::user();
        $post = Post::whereHas('user', function($querry) use ($follower){
            $querry->where('user_fk', $follower->seguidor_fk);
        })->query();

        return $post;
    }

    public function postUser(Post $post){
        $post->getAllPostUser->texto;

        //$allPost = Post::whereHas('user_fk', function($querry) use ($follower){
        //    $querry->where('user', $follower->seguidor_fk);
        //})->get()
        return $post;
    }

    public function getAllPost() {
        $posts = Post::orderBy('id', 'desc')->get();
        return $posts;
    }

    public function getPost(string $id) {
        $post = $this->repository->findOrFail($id);

        return new PostResource($post);
    }
    public function upLike(string $id) {
      // Encontre o post pelo ID
      $post = Post::findOrFail($id);

      // Aumente a quantidade de likes em 1
      $post->increment('likes');

      // Retorne uma resposta, por exemplo, uma mensagem JSON
      return response()->json(['message' => 'Like removed successfully'], 200);
    }
    public function unLike(string $id) {
      // Encontre o post pelo ID
      $post = Post::findOrFail($id);

      // diminui a quantidade de likes em 1
      $post->decrement('likes');

      // Retorne uma resposta, por exemplo, uma mensagem JSON
      return response()->json(['message' => 'Like removed successfully'], 200);
    }

    public function createPost(StorePostRequest $request) {
        $data = $request->validated();
        $post = $this->repository->create($data);
        //(new Registered($post));
        //return redirect()->route('index');
        return new Registered($post);
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
