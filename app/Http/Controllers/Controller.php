<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

abstract class Controller
{
    
    public function index()
    {
        $medicos = Medico::all();
        return response()->json ($medicos, 100);
    }

    public function show($id){
       $medicos = Medico::all($id);
        if (!$medicos) {
        return response()->json([ 'médico não encontrado']);
    }
    return response()->json($medicos);
    }

    public function update(Request $request, $id){
        $medicos = Medico::all($id);
        if(!$medicos){
            return response()->json('médico não encontrado');
        }
        if(isset($medico->$request->nome_completo)){
            
        }

        $medicos->update();
        return response()->json($medicos);
    }

    public function store(Request $request){
        $medicos = Medico::all();
        return response()->json($medicos);

    }

    public function delete($id){
        $medicos = Medico::all($id);
        if(!$medicos){
            return response ()->json(['mensagem não encontrada']);
        }
        $medicos->delete();
        return response ()->json(['mensagem deletado com sucesso']);
    }

}    

