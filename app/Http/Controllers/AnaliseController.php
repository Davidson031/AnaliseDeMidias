<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analise;
use App\Models\TipoMidia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnaliseController extends Controller
{
    //

    public function retornarNomeDoUser(){
        $isUserAutheticated = Auth::check();
        $user = Auth::user();

        if($user){
            return $user->name;
        }else{
            return 'Visitante';
        }
    }


    public function criar_analise(Request $request){

        $tipos = TipoMidia::all();

        $username = self::retornarNomeDoUser();
    
        return view('analise', ['tipos' => $tipos,'user' => $username]);

    }

    

    public function principal(Request $request){

        $username = self::retornarNomeDoUser();
    
        $analises = Analise::all();


    return view('principal', ['analises' => $analises, 'user' => $username]);

    }

    
    public function salvar_analise(Request $request){

        $analises = Analise::all();

        $username = self::retornarNomeDoUser();

        $request->file->store('images', 'public');

        $analise = new Analise();
        $analise->titulo = $request->get('titulo');
        $analise->analise = $request->get('analise');
        $analise->tipo_midias_id = $request->get('tipo_midias_id');
        $analise->nota = $request->get('nota');
        $analise->file_path = $request->file->hashName();

        $analise->save();

        
        return view('principal', ['analises' => $analises, 'user' => $username]);
       
    }

    public function exibir_analise($id){

        $username = self::retornarNomeDoUser();



        $analise = DB::table('analises')
                    ->join('tipo_midias', 'analises.tipo_midias_id', '=', 'tipo_midias.id')
                    ->where('analises.id', $id)->first();

        $comentarios = DB::table('analises')
                ->join('comentarios', 'comentarios.analises_id', '=', 'analises.id')
                ->where('comentarios.analises_id', $id)
                ->get();     
        
        return view('detalhe', ['analise' => $analise, 'comentarios' => $comentarios, 'id' => $id, 'user' => $username]);

    }

    public function teste(){
   
        return view('teste');

    }

    public function exibir_lista($tipo = null){

        $username = self::retornarNomeDoUser();   

        if($tipo=="animes"){
            $analises = Analise::where('tipo_midias_id', 3)->get();
        }

        else if($tipo=="filmes"){
            $analises = Analise::where('tipo_midias_id', 1)->get();
        }

        else if($tipo=="series"){
            $analises = Analise::where('tipo_midias_id', 2)->get();
        }
        
        return view('principal', ['analises' => $analises,'user' => $username]);
    
    }



}
