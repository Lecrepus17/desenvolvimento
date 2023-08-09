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
        return redirect()->route('login');
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
