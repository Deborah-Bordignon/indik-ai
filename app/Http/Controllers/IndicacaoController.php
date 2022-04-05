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

    public function show_categorias()
    {
        $alimenticias = Indicacao::where('categoria', 'Alimentícia')->get();
        $Cabelereiros = Indicacao::where('categoria', 'Cabelereiro')->get();
        $Colocador_de_boxs = Indicacao::where('categoria', 'Colocador_de_box')->get();
        $Contadores = Indicacao::where('categoria', 'Contador')->get();
        $Designers = Indicacao::where('categoria', 'Designer')->get();
        $Eletricistas = Indicacao::where('categoria', 'Eletricista')->get();
        $Escolas = Indicacao::where('categoria', 'Escola')->get();
        $Limpeza_piscinas = Indicacao::where('categoria', 'Limpeza_piscina')->get();
        $Marido_alugueis = Indicacao::where('categoria', 'Marido_aluguel')->get();
        $Pedreiros = Indicacao::where('categoria', 'Pedreiro')->get();
        $Pintores = Indicacao::where('categoria', 'Pintor')->get();
        $Técnicos_informática = Indicacao::where('categoria', 'Técnico_informática')->get();
        $Outros = Indicacao::where('categoria', 'Outro')->get();


        return redirect('indicacoes', [$alimenticias, $Cabelereiros, $Colocador_de_boxs, $Contadores, $Designers, $Eletricistas, $Escolas, $Limpeza_piscinas, $Marido_alugueis,  $Pedreiros, $Pintores, $Técnicos_informática, $Outros]);
    }
}
