<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('bootstrap.index');
    }

    public function register(){
        return view('bootstrap.register');
    }

    public function criar_post(){
        return view('bootstrap.criar_post');
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


    // MÉTODO GET
    public function postagens(){
        $response = 1;// \Http::get(route('users'));
//dd($response);
        // Verifica se a requisição foi bem-sucedida e se o status é 200
        if ($response->successful()) {
            $users = $response->json(); // Obtém os dados dos usuários
            return view('bootstrap.postagens', ['users' => $users]); // Passa os dados para a view
        } else {
            // Trate o erro, se necessário
            abort(500, 'Erro ao obter os usuários da API');
        }
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
