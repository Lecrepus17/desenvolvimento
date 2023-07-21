<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('bootstrap.index');
    }

    public function login(){
        return view('bootstrap.login');
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

    public function postagens(){
        return view('bootstrap.postagens');
    }

    public function postagens2(Request $request){

        return redirect()->route('bootstrap.postagens');
    }
}
