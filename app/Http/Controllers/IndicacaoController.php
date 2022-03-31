<?php

namespace App\Http\Controllers;

use App\Models\Indicacao;
use Illuminate\Http\Request;

class IndicacaoController extends Controller
{
    public function create(Request $request)
    {
        //Instancia a tabela comentario
        $indicacao = new Indicacao;
        $indicacao->codinome = $request->codinome;
        $indicacao->espirito = $request->espirito;
        $indicacao->comentario = $request->comentario;

        $indicacao->save();
        return redirect('/');


    }
}
