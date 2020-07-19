<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index(){
        
        $data = [
            "titulo"=>"Aula Laravel",
            "conteudo" => "Introdução ao Laravel e a construção de APIs",
            "duracao" => 200
        ];

        return response()->json($data);

    }
}
