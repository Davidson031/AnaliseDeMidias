<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Analise;
use Illuminate\Support\Facades\DB;


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

    public function atualizar_comentario(Request $request, $id){
 
        $comentario = Comentario::find($id);
 
        $comentario->mensagem = $request->get('comentario');
        
        $comentario->save();

        return redirect()->back();
    
    }
    
    public function deletar_comentario(Request $request, $id){
 
        $deleted = DB::table('comentarios')->where('id', $id)->delete();
        return redirect()->back();
    
    }



}
