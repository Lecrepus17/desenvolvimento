<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
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
        return response($users, 200);
    }

    public function createUser(StoreUpdateUserRequest $request) {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);

        $user = $this->repository->create($data);

        return new UserResource($user);
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
