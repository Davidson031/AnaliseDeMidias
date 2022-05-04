<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analise;
use App\Models\TipoMidia;
use Illuminate\Support\Facades\DB;


class AnaliseController extends Controller
{
    //

    public function criar_analise(Request $request){

        $tipos = TipoMidia::all();
        return view('analise', ['tipos' => $tipos]);

    }

    public function principal(Request $request){

        $analises = Analise::all();
        return view('principal', ['analises' => $analises]);

    }

    public function salvar_analise(Request $request){

        //Analise::create($request->all());
        $analises = Analise::all();

        $request->file->store('images', 'public');

        $analise = new Analise();
        $analise->titulo = $request->get('titulo');
        $analise->analise = $request->get('analise');
        $analise->tipo_midias_id = $request->get('tipo_midias_id');
        $analise->nota = $request->get('nota');
        $analise->file_path = $request->file->hashName();

        $analise->save();

        
        return view('principal', ['analises' => $analises]);
       
    }

    public function exibir_analise($id){

        $analise = DB::table('analises')
                    ->join('tipo_midias', 'analises.tipo_midias_id', '=', 'tipo_midias.id')
                    ->where('analises.id', $id)->first();

        $comentarios = DB::table('comentarios')
                ->join('analises', 'comentarios.analises_id', '=', 'analises.id')
                ->where('comentarios.analises_id', $id)
                ->get();     
        
        return view('detalhe', ['analise' => $analise, 'comentarios' => $comentarios, 'id' => $id]);

    }

    public function teste(){

        $user = DB::table('comentarios')
        ->join('analises', 'comentarios.analises_id', '=', 'analises.id')->get();     

        //return view('teste', ['res' => $user]);
        return view('welcome');

    }

    public function exibir_lista($tipo = null){

        $analises = Analise::all();

        if($tipo=="animes"){
            $analises = Analise::where('tipo_midias_id', 3)->get();
        }

        else if($tipo=="filmes"){
            $analises = Analise::where('tipo_midias_id', 1)->get();
        }

        else if($tipo=="series"){
            $analises = Analise::where('tipo_midias_id', 2)->get();
        }
        
        return view('principal', ['analises' => $analises]);
    
    }



}
