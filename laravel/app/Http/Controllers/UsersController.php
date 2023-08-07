<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

  /**   public function postagens()
    {
        \Log::info('Entrou na função postagens()');
        try {
            $response = Http::timeout(3)->retry(3, 100)->acceptJson()->get(route('Users'));
            \Log::info('Resposta recebida: ' . $response->status());

            if ($response->successful()) {
                $users = $response->json(); // Obtém os dados dos usuários
                return view('bootstrap.postagens', ['users' => $users]); // Passa os dados para a view
            } else {
                abort(500, 'Erro ao obter os usuários da API');
            }
        } catch (\Exception $e) {
            \Log::error('Erro ao fazer a requisição HTTP: ' . $e->getMessage());
            abort(500, 'Erro ao obter os usuários da API');
        }*/

    public function postagens(){

            return view('bootstrap.postagens');

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
