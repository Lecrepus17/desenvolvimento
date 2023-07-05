<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiUsersController extends Controller
{
    public function __construct(
        protected User $repository,
    ) {

    }
    public function getAllUsers() {
        $users = User::all();
        // $users = User::withTrashed()->get(); ou $users = User::onlyTrashed()->get();
        return response($users, 200);
    }

    public function createUser(StoreUpdateUserRequest $request) {
        $dados = $request->validated();
        $dados['password'] = Hash::make($request['password']);
        User::create($dados);

        return redirect()->route('login')->with('sucesso', 'Produto inserido com sucesso!');
    }
    public function login(Request $request){

            $data = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if (Auth::attempt($data)){
                return redirect()->route('home');
            } else {
                return redirect()->route('usuarios.login')->with('erro', 'Deu ruim');
            }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    public function getUser($id) {
        // logic to get a User record goes here
    }

    public function updateUser(/*Request $request, $id*/) {
        // logic to update a User record goes here
    }

    public function deleteUser ($id) {
        // logic to delete a User record goes here
    }
}
