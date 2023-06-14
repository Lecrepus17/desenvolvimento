<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function addSave(Request $form, Posts $Posts){
        $dados = $form->validate([
            'name' => ['required', Rule::unique('Postss'), 'min:3'],
            'price' => ['required', 'gte:0', 'numeric'],
            'quantity' => ['required', 'integer', 'gte:0']
        ]);

        Posts::create($dados);

        return redirect()->route('Postss')->with('sucesso', 'Posts inserido com sucesso!');
    }
}
