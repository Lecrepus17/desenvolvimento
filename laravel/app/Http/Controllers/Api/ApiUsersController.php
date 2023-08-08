<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;
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
        return response()->json($users, 200);
    }

    public function createUser(StoreUpdateUserRequest $request) {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = $this->repository->create($data);
        event(new Registered($user));
        return redirect()->route('index');
    }
    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)){
            // Mensagem de depuração para verificar se a autenticação foi bem-sucedida
            \Log::info('Usuário autenticado com sucesso.');
            return redirect()->route('postagens');
        } else {
            // Mensagem de depuração para verificar se a autenticação falhou
            \Log::info('Autenticação falhou.');
            return redirect()->route('index');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    public function getUser(string $id) {
        $user = $this->repository->findOrFail($id);

        return new UserResource($user);
    }



    public function updateUser(StoreUpdateUserRequest $request, string $id){
        $user = $this->repository->findOrFail($id);

        $data = $request->validated();

        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return new UserResource($user);
    }

    public function deleteUser (string $id){
        $user = $this->repository->findOrFail($id);
        $user->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
