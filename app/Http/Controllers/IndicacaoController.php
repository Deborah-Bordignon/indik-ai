<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Indicacao;
use App\Models\Cliente;
use Illuminate\Http\Request;

class IndicacaoController extends Controller
{
    public function select_create(Request $request)
    {
        //Instancia a tabela Indicacao e Fornecedor
        $indicacao = new Indicacao;
        $fornecedor = new Fornecedor;
        $cliente = new Cliente;

        $consulta_fornecedor = Fornecedor::where('telefone', $request->telefone)->get();
        $consulta_cliente = Cliente::where('email', $request->email)->get();

       
        if(count($consulta_fornecedor) == 0)
        {
            $fornecedor->telefone = $request-> telefone;
            $fornecedor->empresa_indicada = $request-> empresa_indicada;
            $fornecedor->save(); 
            $fornecedor_id = $fornecedor->id;           
        }else
        {
            $fornecedor_id = $consulta_fornecedor->first()->id;
        }
        
        if(count($consulta_cliente) == 0)
        {
            $cliente->email = $request-> email;
            $cliente->nome = $request-> nome;
            $cliente->save();   
            $cliente_id = $cliente->id;         
        }else
        {
            $cliente_id = $consulta_cliente->first()->id;
        }


            $indicacao->id_cliente = $cliente_id;
            $indicacao->id_fornecedor = $fornecedor_id;
            $indicacao->comentario = $request-> comentario;
            $indicacao->categoria = $request-> categoria;
            $indicacao->cidade = $request-> cidade;
            $indicacao->estado = $request-> estado;
            $indicacao->save();

            return redirect('indicacoes');

    }
}
