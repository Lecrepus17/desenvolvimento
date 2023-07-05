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

    public function criar_blog(){
        return view('bootstrap.criar_blog');
    }

    public function perfil(){
        return view('bootstrap.perfil');
    }
}
