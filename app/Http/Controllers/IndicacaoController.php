<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Indicacao;
use Illuminate\Http\Request;

class IndicacaoController extends Controller
{
    public function select_create(Request $request)
    {
        //Instancia a tabela Indicacao e Fornecedor
        $indicacao = new Indicacao;
        $fornecedor = new Fornecedor;

        $fornecedor = Fornecedor::where('telefone', $request->telefone)->get();

        if(count($fornecedor) == 0)
        {
            echo 'Fornecedor Não existe';
        }else{
            echo 'Fornecedor existe';
        }



        // $indicacao->
        // $indicacao->
        // $indicacao->

        // $indicacao->save();
        // return redirect('/');


    }
}
