<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSeguirs;
use App\Http\Resources\SeguirsResource;
use App\Models\Seguir;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ApiSeguirsController extends Controller
{
    public function __construct(
        protected Seguir $repository,
    ) {

    }
    public function createSeguirs(StoreSeguirs $request) {
        $data = $request->validated();
        $seguirs = $this->repository->create($data);

        return new SeguirsResource($seguirs);
    }
    public function deleteSeguirs (string $id){
        $user = $this->repository->findOrFail($id);
        $user->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}


    //$seguir = Seguir::create($data);
