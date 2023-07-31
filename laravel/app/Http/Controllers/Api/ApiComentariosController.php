<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComentarioRequest;
use App\Http\Resources\ComentarioResource;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiComentariosController extends Controller
{

    public function __construct(
        protected Comentario $repository,
    ) {

    }
    public function getComent(string $id) {
        $coment = $this->repository->findOrFail($id);

        return new comentarioResource($coment);
    }
    public function getAllComent() {
        $coment = Comentario::all();
        // $users = User::withTrashed()->get(); ou $users = User::onlyTrashed()->get();

        return $coment;
        //return response($users, 200);
    }
    public function createComent(StoreComentarioRequest $request) {
        $data = $request->validated();

        $coment = $this->repository->create($data);

        return new ComentarioResource($coment);
    }

    public function deleteComent(string $id){
        $coment = $this->repository->findOrFail($id);
        $coment->delete();

        return $coment;
    }
}
