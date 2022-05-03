<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Analise;

class ComentarioController extends Controller
{
    //
    public function salvar(Request $request, $id){

        $comentario = new Comentario();
        $comentario->nome = $request->get('nome');
        $comentario->email = $request->get('email');
        $comentario->mensagem = $request->get('mensagem');
        $comentario->analises_id = $id;
        $comentario->save();
 
        return redirect()->back();
    }
}
