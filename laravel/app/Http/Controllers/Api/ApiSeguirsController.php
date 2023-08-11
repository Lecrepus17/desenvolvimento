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
        event(new SeguirsResource($seguirs));
        return redirect()->route('postagens');
    }
    public function getAllSeguir() {
        $Seguir = Seguir::all();
        return $Seguir;
        // $users = User::withTrashed()->get(); ou $users = User::onlyTrashed()->get();
        //return response($users, 200);
    }
    public function deleteSeguirs(StoreSeguirs $request)
    {

        $seguido = $request->seguido_fk;
        $seguidor = $request->seguidor_fk;

        $sequirs = $this->repository
            ->where('seguido_fk', $seguido)
            ->where('seguidor_fk', $seguidor)
            ->firstOrFail();

        $sequirs->delete();

        return redirect()->route('amigos');
    }

}



