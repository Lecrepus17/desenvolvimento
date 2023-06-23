<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiUsersController extends Controller
{
    public function getAllUsers() {
        $users = User::all();
        // $users = User::withTrashed()->get(); ou $users = User::onlyTrashed()->get();
        return response($users, 200);
    }

    public function createUser(Request $form, User $user) {
        $dados = $form->validate([]);

        User::create($dados);

        return redirect()->route('produtos')->with('sucesso', 'Produto inserido com sucesso!');
    }

    public function getUser($id) {
        // logic to get a User record goes here
    }

    public function updateUser(Request $request, $id) {
        // logic to update a User record goes here
    }

    public function deleteUser ($id) {
        // logic to delete a User record goes here
    }
}
