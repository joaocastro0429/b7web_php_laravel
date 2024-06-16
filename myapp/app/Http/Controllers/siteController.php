<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
        $nome="joao";
        $sobrenome="castro";
        $idade=36;
        $data_nascimento='29/04/1988';

        $data=[
          "nome"=>$nome,
          "idade"=>$idade,
          "data_nascimento"=>$data_nascimento,
          "sobrenome"=>$sobrenome
        ];

        return view('bemvindo',$data);

    }

    public function tchau(){
        return view("sair");
    }

    public function usuarios(Request $id){
        $data=[
            "quantidade"=>$id->id
        ];
        return view('usuarios',$data);
    }
}
