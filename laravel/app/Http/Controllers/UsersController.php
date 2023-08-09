<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\ApiComentariosController;
use App\Http\Controllers\Api\ApiPostsController;
use App\Http\Controllers\Api\ApiSeguirsController;
use App\Http\Controllers\Api\ApiUsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    protected ApiUsersController $ApiUsersController;
    protected ApiSeguirsController $ApiSeguirsController;
    protected ApiPostsController $ApiPostsController;
    protected ApiComentariosController $ApiComentariosController;

    public function __construct(ApiUsersController $ApiUsersController, ApiSeguirsController $ApiSeguirsController, ApiPostsController $ApiPostsController, ApiComentariosController $ApiComentariosController)
    {
        $this->ApiUsersController = $ApiUsersController;
        $this->ApiSeguirsController = $ApiSeguirsController;
        $this->ApiPostsController = $ApiPostsController;
        $this->ApiComentariosController = $ApiComentariosController;
    }



    public function index(Request $request){
        if($request->isMethod('POST')){

            $data = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            if (Auth::attempt($data)){
                return redirect()->route('postagens');
            } else {
                return redirect()->route('login')->with('erro', 'Deu ruim');
            }
        }
        return view('bootstrap.index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


    public function register(){
        return view('bootstrap.register');
    }


    public function perfil(){

        return view('bootstrap.perfil');

    }


    // MÉTODO GET
    public function editar_perfil(){
        $user = Auth::user();
        return view('bootstrap.editar_perfil', ['user' => $user]);
    }
    // MÉTODO POST
    public function editar_perfil2(Request $request){

        return redirect()->route('bootstrap.editar_perfil');
    }


    public function postagens()
    {
        $comentario = $this->ApiComentariosController->getAllComent();
        $post = $this->ApiPostsController->getAllPost();

        $response = $this->ApiUsersController->getAllUsers(); // Sua chamada à API para obter os usuários
        $user = $response->getData();
        return view('bootstrap.postagens', ['users' => $user, 'posts' => $post]); // Passa os dados para a view

    }

    // MÉTODO POST
    public function postagens2(Request $request){

        return redirect()->route('bootstrap.postagens');
    }


    public function amigos(){
        return view('bootstrap.amigos');
    }

    public function sobre_perfil(){
        return view('bootstrap.sobre_perfil');
    }

    public function feedSeguindo(){
        return view('bootstrap.feedSeguindo');
    }
}
