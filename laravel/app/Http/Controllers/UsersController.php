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
    protected ApiUsersController $apiUsersController;

    public function __construct(ApiUsersController $api1, ApiSeguirsController $api2, ApiPostsController $api3, ApiComentariosController $api4)
    {
        $this->apiUsersController = $api1;
        $this->apiSeguirsController = $api2;
        $this->apiPostsController = $api3;
        $this->apiComentariosController = $api4;
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
        return view('bootstrap.editar_perfil');
    }
    // MÉTODO POST
    public function editar_perfil2(Request $request){

        return redirect()->route('bootstrap.editar_perfil');
    }


    public function postagens()
    {
        $response = $this->apiComentariosController->getAllUsers();
        $response = $this->apiPostsController->getAllUsers();

        $response = $this->apiUsersController->getAllUsers();
        return view('bootstrap.postagens', ['users' => $response]); // Passa os dados para a view

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
