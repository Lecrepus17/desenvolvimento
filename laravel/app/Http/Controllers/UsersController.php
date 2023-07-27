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

    public function fotos(){
        return view('bootstrap.fotos');
    }
}
